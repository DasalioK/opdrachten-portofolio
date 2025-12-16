# ----------------------------------------------------------
# 1. De bal wordt sneller na ELKE punt.
# 2. De paddle wordt kleiner na ELKE punt (moeilijker).
# 3. De bal verandert van kleur na ELKE punt.
# ----------------------------------------------------------

import turtle
import time
import random

# Venster instellen
wn = turtle.Screen()
wn.title("Paddle en Bal - Be Creative!")
wn.bgcolor("black")
wn.setup(width=600, height=500)
wn.tracer(0)

# Linker paddle
paddle_left = turtle.Turtle()
paddle_left.speed(0)
paddle_left.shape("square")
paddle_left.color("white")
paddle_left.shapesize(stretch_wid=6, stretch_len=1)
paddle_left.penup()
paddle_left.goto(-250, 0)

# Rechter paddle
paddle_right = turtle.Turtle()
paddle_right.speed(0)
paddle_right.shape("square")
paddle_right.color("white")
paddle_right.shapesize(stretch_wid=6, stretch_len=1)
paddle_right.penup()
paddle_right.goto(250, 0)

# Bal
ball = turtle.Turtle()
ball.speed(0)
ball.shape("square")
ball.color("white")
ball.penup()
ball.goto(0, 0)
ball.dx = 0.6   # AANGEPAST: langzamere start
ball.dy = -0.6  # AANGEPAST: langzamere start

# Score en levens
score = 0
lifes = 5  # AANGEPAST: meer levens

# Pen voor score + levens
pen = turtle.Turtle()
pen.speed(0)
pen.color("white")
pen.penup()
pen.hideturtle()
pen.goto(0, 200)
pen.write("Score: 0  Levens: 5", align="center", font=("Courier", 24, "normal"))

# Functies
def update_score():
    pen.clear()
    pen.write("Score: {}  Levens: {}".format(score, lifes), align="center", font=("Courier", 24, "normal"))

def game_over():
    pen.goto(0, 0)
    pen.write("Game Over", align="center", font=("Courier", 36, "normal"))
    ball.hideturtle()

def reset_ball():
    """Zet de bal terug in het midden en laat hem willekeurig naar links of rechts bewegen."""
    ball.goto(0, 0)
    ball.dx = random.choice([-0.6, 0.6])  # AANGEPAST aan lagere snelheid
    ball.dy = random.choice([-0.6, 0.6])
    paddle_left.shapesize(stretch_wid=6, stretch_len=1)
    paddle_right.shapesize(stretch_wid=6, stretch_len=1)
    ball.color("white")

def apply_hit_effects(paddle_hit):
    """Effecten die gebeuren na ELKE succesvolle hit op een paddle."""
    global score

    # Verhoog score
    score += 1
    update_score()

    # 1️⃣ Maak bal iets sneller (maar minder extreem)
    ball.dx *= 1.03   # AANGEPAST: minder snelle versnelling
    ball.dy *= 1.03

    # 2️⃣ Paddle kleiner maken (minimaal 4 hoog, en kleinere stap)
    current_size = paddle_hit.shapesize()[0]
    if current_size > 4:  # AANGEPAST: grotere minimale paddle
        paddle_hit.shapesize(stretch_wid=current_size - 0.15, stretch_len=1)  # AANGEPAST: kleinere krimp per hit

    # 3️⃣ Verander de kleur van de bal
    colors = ["white", "yellow", "orange", "red", "cyan", "magenta", "green"]
    ball.color(random.choice(colors))

# Paddle bewegen (links)
def paddle_left_up():
    y = paddle_left.ycor()
    if y < 200:
        paddle_left.sety(y + 20)

def paddle_left_down():
    y = paddle_left.ycor()
    if y > -200:
        paddle_left.sety(y - 20)

# Paddle bewegen (rechts)
def paddle_right_up():
    y = paddle_right.ycor()
    if y < 200:
        paddle_right.sety(y + 20)

def paddle_right_down():
    y = paddle_right.ycor()
    if y > -200:
        paddle_right.sety(y - 20)

# Toetsenbordbinding
wn.listen()
wn.onkeypress(paddle_left_up, "w")
wn.onkeypress(paddle_left_down, "s")
wn.onkeypress(paddle_right_up, "Up")
wn.onkeypress(paddle_right_down, "Down")

# Game-loop
def game_loop():
    global score, lifes

    # Beweeg de bal
    ball.setx(ball.xcor() + ball.dx)
    ball.sety(ball.ycor() + ball.dy)

    # Botsing met bovenkant
    if ball.ycor() > 240:
        ball.sety(240)
        ball.dy *= -1

    # Botsing met onderkant
    if ball.ycor() < -240:
        ball.sety(-240)
        ball.dy *= -1

    # Botsing met linker paddle of mis links
    if ball.dx < 0 and ball.xcor() < -240:
        if (paddle_left.ycor() - 60 < ball.ycor() < paddle_left.ycor() + 60):
            ball.setx(-240)
            ball.dx *= -1
            apply_hit_effects(paddle_left)
        else:
            lifes -= 1
            update_score()

            if lifes == 0:
                game_over()
                return
            else:
                ball.dx = 0
                ball.dy = 0
                wn.update()
                time.sleep(2)
                reset_ball()

    # Botsing met rechter paddle of mis rechts
    if ball.dx > 0 and ball.xcor() > 240:
        if (paddle_right.ycor() - 60 < ball.ycor() < paddle_right.ycor() + 60):
            ball.setx(240)
            ball.dx *= -1
            apply_hit_effects(paddle_right)
        else:
            lifes -= 1
            update_score()

            if lifes == 0:
                game_over()
                return
            else:
                ball.dx = 0
                ball.dy = 0
                wn.update()
                time.sleep(2)
                reset_ball()

    wn.update()
    wn.ontimer(game_loop, 10)

# Start de game
game_loop()

# Houd venster open
wn.mainloop()

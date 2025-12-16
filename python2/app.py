from flask import Flask, render_template, request
import datetime

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        # Haal de ingevoerde datum-string op uit het formulier (YYYY-MM-DD)
        date_string = request.form['date']

        # Zet de string om naar een datetime-object
        date_object = datetime.datetime.strptime(date_string, "%Y-%m-%d")

        # Bepaal de dag van de week als een getal (0=Maandag, 6=Zondag)
        day_as_number = date_object.weekday()

        # Correcte lijst van 7 dagen (0..6)
        days_of_week_array = [
            'Maandag', 'Dinsdag', 'Woensdag',
            'Donderdag', 'Vrijdag', 'Zaterdag', 'Zondag'
        ]

        # Zoek de dagnaam bij het getal
        day_of_week = days_of_week_array[day_as_number]

        # Render de resultaatpagina
        return render_template('result.html', day_of_week=day_of_week)

    # Bij GET: laat het formulier zien
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)

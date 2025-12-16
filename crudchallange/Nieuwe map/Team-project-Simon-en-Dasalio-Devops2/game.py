# versie 0.9 hangman

import random

def hangman():
    word_list = ["python", "hangman", "programming", "game", "computer"]
    word = random.choice(word_list).lower()
    guessed_letters = []
    attempts = 8

    print("Welkom bij Hangman!")
    print("Probeer het woord te raden door letters te kiezen.")
    print(f"Je hebt {attempts} pogingen voordat het spel voorbij is.")

    while True:
        hidden_word = ""
        for letter in word:
            if letter in guessed_letters:
                hidden_word += letter + " "
            else:
                hidden_word += "_ "

        print("\n" + hidden_word)

        if "_" not in hidden_word:
            print("Gefeliciteerd! Je hebt het word geraden.")
            break

        if attempts == 1:
            print(f"Helaas, je hebt het woord niet geraden. Het woord was {word}.")
            break

        guess = input("Kies een letter: ").lower()

        if len(guess) != 1 or not guess.isalpha():
            print("Invalid input. Voer één enkele letter in.")
            continue

        if guess in guessed_letters:
            print("Je hebt deze letter al geraden. Probeer het opnieuw.")
            continue

        guessed_letters.append(guess)

        if guess in word:
            print("Goed geraden!")
        else:
            attempts -= 1
            print(f"Fout! Je hebt nog {attempts} pogingen over.")

if __name__ == "__main__":
    hangman()
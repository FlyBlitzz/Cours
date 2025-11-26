# Documentation du Script de Maintenance
## Présentation
Ce document explique comment exécuter un script de maintenance système et comment installer les dépendances nécessaires. Il inclut :
- une image illustrative,
- du code inline,
- un bloc de code sans syntaxe,
- un bloc de code avec syntaxe (bash et python dans cet exemple).
## Illustration
![Illustration du script](https://example.com/image.png)

Cette image est utilisée pour illustrer l'exécution générale du script.
## Utilisation simple du script
Pour lancer le script, exécutez la commande suivante : python3 maintenance.py.
## Bloc de code sans syntaxe
```
Démarrage du script...
Nettoyage des fichiers temporaires...
Optimisation du système...
Script terminé.
```
Ce bloc représente une sortie simulée du script.
## Bloc de code avec syntaxe - Bash
```
!/bin/bash

echo "Mise à jour du système..."
sudo apt update
sudo apt upgrade -y

echo "Nettoyage..."
sudo apt autoremove -y
sudo apt autoclean

echo "Terminé."
```
## Bloc de code avec syntaxe - Python
```
import os
import time

print("Démarrage de la maintenance...")

time.sleep(1)
os.system("sudo apt update")
```

## Points de validation
- Présence d'une image : **oui**
- Présence de code inline : **oui** (python3 maintenance.py)
- Bloc sans syntaxe inclu : **oui**
- Bloc avec syntaxe (bash + python) : **oui**
- Mise en forme claire et lisible : **oui**
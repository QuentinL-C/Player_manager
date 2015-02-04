Player Manager
==============

1) API
------

### Bundle CharacterBundle

#### CharacterUsedAbility
* private getAbility()
    * Fonction : Retourne une caractéristique donnée pour un personnage. Peut retourner le détail du total de la valeur si $detail=true.
    * Paramètres : $characterUsed (object), $abilityType (INT), ($detail=false (booléen))
    * Retour : 
        * Si $detail=false, retourne un INT, contenant la valeur totale de la caractéristique. 
        * Si $detail=true, retourne un String, contenant la formule de calcul de la valeur totale de la caractéristique.

* private abilityModifier()
    * Fonction : Retourne le modificateur d’une caractéristique donnée.
    * Paramètre : $abilityValue (INT)
    * Retour : INT, valeur du modificateur

* getStrength()
    * Fonction : Retourne la Force d’un personnage. Peut retourner le détail du calcul de la force du personnage si $detail=true.
    * Paramètres : $characterUsed (object), ($detail=false (booléen))
    * Retour : 
        * Si $detail=false : retourne un INT, valeur de la Force
        * Si $detail=true : retourne un String, détail de la valeur de la Force

* getStrengthModifier()
    * Fonction : Retourne le Modificateur de Force d’un personnage
    * Paramètres : $characterUsed (object)
    * Retour : INT du modificateur de force

* getDexterity()
    * Fonction : Retourne la Dextérité d’un personnage. Peut retourner le détail du calcul de la dextérité du personnage si $detail=true.
    * Paramètres : $characterUsed (object), ($detail=false (booléen))
    * Retour : 
        * Si $detail=false : retourne un INT, valeur de la Dextérité
        * Si $detail=true : retourne un String, détail de la valeur de la Dextérité

* getDexterityModifier()
    * Fonction : Retourne le Modificateur de Dextérité d’un personnage
    * Paramètres : $characterUsed (object)
    * Retour : INT du modificateur de Dextérité

* getConstitution()
    * Fonction : Retourne la Constitution d’un personnage. Peut retourner le détail du calcul de la Constitution du personnage si $detail=true.
    * Paramètres : $characterUsed (object), ($detail=false (booléen))
Retour : 
•	Si $detail=false : retourne un INT, valeur de la Constitution
•	Si $detail=true : retourne un String, détail de la valeur de la Constitution

getConstitutionModifier()
	Fonction : Retourne le Modificateur de Constitution d’un personnage
	Paramètres : $characterUsed (object)
	Retourne : INT du modificateur de Constitution

getIntelligence()
	Fonction : Retourne l’Intelligence d’un personnage. Peut retourner le détail du calcul de l’intelligence du personnage si $detail=true.
Paramètres : $characterUsed (object), ($detail=false (booléen))
Retour : 
•	Si $detail=false : retourne un INT, valeur de l’intelligence
•	Si $detail=true : retourne un String, détail de la valeur de l’intelligence

getIntelligenceModifier()
	Fonction : Retourne le Modificateur d’Intelligence d’un personnage
	Paramètres : $characterUsed (object)
	Retour : INT du modificateur d’Intelligence

getWisdom()
	Fonction : Retourne la Sagesse d’un personnage. Peut retourner le détail du calcul de la sagesse du personnage si $detail=true.
Paramètres : $characterUsed (object), ($detail=false (booléen))
Retour : 
•	Si $detail=false : retourne un INT, valeur de la Sagesse
•	Si $detail=true : retourne un String, détail de la valeur de la Sagesse


getWisdomModifier()
	Fonction : Retourne le Modificateur de Sagesse d’un personnage
	Paramètres : $characterUsed (object)
	Retour : INT du modificateur de Sagesse

getCharisma()
	Fonction : Retourne le Charisme d’un personnage. Peut retourner le détail du calcul du Charisme du personnage si $detail=true.
Paramètres : $characterUsed (object), ($detail=false (booléen))
Retour : 
•	Si $detail=false : retourne un INT, valeur du Charisme
•	Si $detail=true : retourne un String, détail de la valeur du Charisme

getCharismaModifier()
	Fonction : Retourne le Modificateur de Charisme d’un personnage
	Paramètres : $characterUsed (object)
	Retour : INT du modificateur de Charisme

getAbilities()
	Fonction : Retourne l’intégralité des caractéristiques d’un personnage donné
	Paramètres : $characterUsed (object)
	Retour : Array, contenant dans l’ordre les 6 valeurs totales des caractéristiques (dans l’ordre) d’un personnage donné. 
Service CharacterUsedDnD :
getBAB()
	Fonction : Retourne le(s) Bonus de Base Attaque d’un personnage donné
	Paramètres : $characterUsed (object)
	Retour : Array, contenant les différentes BBA d’un personnage. Si un personnage a plusieurs attaques possibles, getBAB() retourne plusieurs entrées.

getGrappleModifier()
	Fonction : Retour le(s) modificateur(s) de lutte d’un personnage
	Paramètres : $characterUsed (object)
	Retour : Array, contenant les différents modificateurs de lutte d’un personnage. Si un personnage a plusieurs attaques possible, getGrappleModifier() retourne plusieurs modificateurs de lutte, en fonctionne du BBA de chaque attaque.

getWeaponCurrent()
	Fonction : Retourne l’arme en cours d’utilisation par le personnage
Paramètres : $characterUsed (object)
Retour : $weapon (object)

getAC()
	Fonction : Retourne la Classe d’Armure du personnage
	Paramètres : $characterUsed (object)
	Retour : INT, retourne la valeur d’AC du personnage

getTouchAC()
	Fonction : Retourne la Classe d’Armure de Contact du personnage
	Paramètres : $characterUsed (object)
	Retour : INT, retourne la valeur de TouchAC du personnage

getFFAC()
	Fonction : Retourne la Classe d’Armure de prise au dépourvu du personnage
	Paramètres : $characterUsed (object)
	Retour : INT, retourne la valeur de FFAC du personnage

getAW()
	Fonction : Retourne l’armure portée par le personnage
	Paramètres : $characterUsed (object)
	Retour : object, retourne l’armure du personnage sous forme d’objet

getSC()
	Fonction : Retourne le bouclier porté par le personnage
	Paramètres : $characterUsed (object)
	Retour : object, retourne le bouclier du personnage sous forme d’objet

getSpeed()
	Fonction : Retourne la vitesse de déplacement de base du personnage
	Paramètres : $characterUser (object)
	Retour : FLOAT, retourne la valeur (décimale) de déplacement de base.

getInitiativeModifier()
	Fonction : Retourne le modificateur d’initiative du personnage
	Paramètres : $characterUser (object)
	Retour : INT, retourne la valeur d’intiative.
Service CharacterUsedST :
getFortitude()
	Fonction : Retourne le JdS de Réflex du personnage. Peut retourner le détail de la formule.
	Paramètres : $characterUsed (object), (detail=false (booléen))
	Retour : 
•	Si $detail=false : INT, valeur du modificateur de JdS du personnage
•	Si $detail=true : String, délivrant le détail du calcul du modificateur


getReflex()
	Fonction : Retourne le JdS de Vigueur du personnage. Peut retourner le détail de la formule.
	Paramètres : $characterUsed (object), (detail=false (booléen))
	Retour : 
•	Si $detail=false : INT, valeur du modificateur de JdS du personnage
•	Si $detail=true : String, délivrant le détail du calcul du modificateur

getWill()
	Fonction : Retourne le JdS de Volonté du personnage. Peut retourner le détail de la formule.
	Paramètres : $characterUsed (object), (detail=false (booléen))
	Retour : 
•	Si $detail=false : INT, valeur du modificateur de JdS du personnage
•	Si $detail=true : String, délivrant le détail du calcul du modificateur
Service CharacterUsedAction :
deleteCharacterUsed()
	Fonction :
	Paramètre :
	Retour :


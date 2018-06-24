#define   SIZE_ENVOI  17
#define   SIZE_RECEP  15
#define MY_LEDV  2

char  Conv_hexToAsc(char digH); // définition de la fonction de ...
                  // conversion d'un chiffre hexa en code ASCII
void  Envoi_Trame(int valcapt); // définition de la fonction d'envoi ...
                  // d'une trame
void Reception_Trame();//définition de la fonction de reception des trames
void Analyse_Trame();//définition de la fonction d'analyse des trames

char  TrameEnvoi[20];   // buffer pour envoyer  une trame vers la passerelle
char  TrameRecep[20];   // buffer pour recevoir une trame venant de la passerelle
char  CheckSum;

//moteur
int pinMoteur1=14;
int pinMoteur2=15;

int barreGraph34=34;

void setup()
{
  pinMode(MY_LEDV, OUTPUT);
  Serial.begin(9600);
  Serial1.begin(9600);
  pinMode(26,OUTPUT);
  pinMode(barreGraph34,OUTPUT);

    //moteur
  pinMode(pinMoteur1,OUTPUT);
  pinMode(pinMoteur2,OUTPUT);
  // put your setup code here, to run once:

  // Partie constante de la trame 
  TrameEnvoi[0] = '1';  // le champ TRA. choisir toujours "Trame courante = 1"
  TrameEnvoi[1] = '0';  // le champ OBJ (4 octets) = numero de groupe. ex 001A
  TrameEnvoi[2] = '1';  //
  TrameEnvoi[3] = '1';  // 
  TrameEnvoi[4] = 'E';  // 
  TrameEnvoi[5] = '1';  // champ REQ. 1= Requete en ecriture
//  TrameEnvoi[6] = ;   // champ TYP. remplir dans la boucle (voir Doc)
  TrameEnvoi[7] = '0';  // champ NUM (2 octets). Numero du capteur
  TrameEnvoi[8] = '1';  // On choisit par exemple le numero 01.
//  TrameEnvoi[ 9] = ;    // Champ VAL (4 octets) = valeur à envoyer au site web
//  TrameEnvoi[10] = ;    // par exemple la valeur du capteur de lumiere
//  TrameEnvoi[11] = ;
//  TrameEnvoi[12] = ;
  TrameEnvoi[13] = 'R'; // Champ TIM (4 octets) = heure d'envoi de la trame
  TrameEnvoi[14] = 'I'; // Ce champ n'est pas utilisé par la passerelle; donc
  TrameEnvoi[15] = 'E'; // on peut mettre la valeur qu'on veut
  TrameEnvoi[16] = 'N';
//  TrameEnvoi[17] = ;    // premier  chiffre (poid fort)   du checksum
//  TrameEnvoi[18] = ;    // deuxieme chiffre (poid faible) du checksum
}

void loop()
{
  int n, valcapt;   // valeur lue du capteur

  // put your main code here, to run repeatedly:
  //Serial.println(analogRead(26));
  valcapt = analogRead(26);
  // lire ici le capteur et mettre la valeur dans la variable valcapt
    if(valcapt<900){
      delay(5000);
    //Envoi_Trame_fictif();
    //digitalWrite(barreGraph34,LOW);
    digitalWrite(pinMoteur1,LOW); //moteur
    digitalWrite(pinMoteur2,LOW);
  }

    else{
    TrameEnvoi[6] = 0x37; // champ TYP. 0x35 = envoi de la valeur du capteur de lumiere
    Envoi_Trame(valcapt);
  }
    Reception_Trame();
    //Analyse_Trame();
  delay(1000);  // tempo de 1 secondes
}

//-------------------------------------
  void Reception_Trame()
//-------------------------------------  
  {int i;
  for(i=0; i<SIZE_RECEP; i++){
  if (Serial1.available() > 0) {
          TrameRecep[i]=Serial1.read();
                //affichage trame
          if(i<14)Serial.print(TrameRecep[i]);
          else Serial.println(TrameRecep[i]);
          /*if(tramePasserelle[9]!= '0' || tramePasserelle[10]=='9' ){
                  Serial.print("une led est allumée,   ");
                  Serial.println("activer le moteur");
                  /*digitalWrite(MY_LEDV,HIGH);
                  digitalWrite(barreGraph34,HIGH);
          }*/
          Analyse_Trame(i, TrameRecep);
  }
  }
  }

//---------------------------------
void Analyse_Trame(int i, char TrameRecep[])
//---------------------------------
{
          
  if(TrameRecep[6]=='7' && i==14){
       Serial.println("une led est allumée");
       Serial.println("le moteur est en marche");
       //digitalWrite(barreGraph34,HIGH);
       digitalWrite(pinMoteur1,LOW); //le moteur se lance
       digitalWrite(pinMoteur2,HIGH);
          }
   
 /* else if(TrameRecep[6]=='A' && i==14){
       Serial.println("LA et MI détecté");
       Serial.println("activer le moteur");
       digitalWrite(pinMoteur1,LOW); //le moteur se lance
       digitalWrite(pinMoteur2,HIGH);
       digitalWrite(MY_LEDV,HIGH);
          }  */

  else if(TrameRecep[5]=='2' && TrameRecep[9]=='1' && TrameRecep[10]=='1' && TrameRecep[11]=='1' && TrameRecep[12]=='1'){
       digitalWrite(barreGraph34,HIGH); 
  }

  else if(TrameRecep[5]=='2' && TrameRecep[9]=='2' && TrameRecep[10]=='2' && TrameRecep[11]=='2' && TrameRecep[12]=='2'){
       digitalWrite(barreGraph34,LOW); 
  }
}

//---------------------------------
void  Envoi_Trame_fictif()
//---------------------------------
{ int n;  char digH, digA='0';  // digit (4 bits) Hexa et Ascii
  
  TrameEnvoi[9] = digA;
  TrameEnvoi[10] = digA;
  TrameEnvoi[11] = digA;
  TrameEnvoi[12] = digA;

  Serial.print("Trame = ");
  // boucle pour envoyer une trame vers la passerelle
  CheckSum = 0;
  // envoi des 'SIZE_ENVOI' premiers octets
  for (n = 0; n < SIZE_ENVOI; n++) {
    Serial.print(TrameEnvoi[n]);
    Serial1.print(TrameEnvoi[n]);
    CheckSum = CheckSum + TrameEnvoi[n];
  }
  digH = (CheckSum >> 4) & 0x0F;  // poid fort du CheckSum
  digA = Conv_hexToAsc(digH);
  Serial.print(digA);       // envoi du poid fort
  Serial1.print(digA);
  digH = CheckSum & 0x0F;     // poid faible du CheckSum
  digA = Conv_hexToAsc(digH);
  Serial.print(digA);       // envoi du poid faible
  Serial1.print(digA);
  Serial.println();   // retour à la ligne
  
}

//---------------------------------
void  Envoi_Trame(int valcapt)
//---------------------------------
{ int n;  char digH, digA;  // digit (4 bits) Hexa et Ascii

  // convertir la valeur du capteur en 4 chiffres ASCII (poid fort en premier)
  // conversion du 1er chiffre (poid fort)
  digH = (valcapt >> 12) & 0x0F;  // >> signifie décalage de 12 bits vers la droite
  digA = Conv_hexToAsc(digH);
  TrameEnvoi[9] = digA;
  // conversion du 2e chiffre
  digH = (valcapt >> 8) & 0x0F; // décalage de 8 bits vers la droite
  digA = Conv_hexToAsc(digH);
  TrameEnvoi[10] = digA;
  // conversion du 3e chiffre
  digH = (valcapt >> 4) & 0x0F; // décalage de 4 bits vers la droite
  digA = Conv_hexToAsc(digH);
  TrameEnvoi[11] = digA;
  // conversion du 4e chiffre (poid faible)
  digH = valcapt & 0x0F;    // pas besoin de décalage. 
  digA = Conv_hexToAsc(digH);
  TrameEnvoi[12] = digA;

  Serial.print("Trame = ");
  // boucle pour envoyer une trame vers la passerelle
  CheckSum = 0;
  // envoi des 'SIZE_ENVOI' premiers octets
  for (n = 0; n < SIZE_ENVOI; n++) {
    Serial.print(TrameEnvoi[n]);
    Serial1.print(TrameEnvoi[n]);
    CheckSum = CheckSum + TrameEnvoi[n];
  }
  digH = (CheckSum >> 4) & 0x0F;  // poid fort du CheckSum
  digA = Conv_hexToAsc(digH);
  Serial.print(digA);       // envoi du poid fort
  Serial1.print(digA);
  digH = CheckSum & 0x0F;     // poid faible du CheckSum
  digA = Conv_hexToAsc(digH);
  Serial.print(digA);       // envoi du poid faible
  Serial1.print(digA);
  Serial.println();   // retour à la ligne
}

//---------------------------------
char  Conv_hexToAsc(char digH)
//---------------------------------
{ char valAsc;

  digH &= 0x0F;   // garder que les 4 bits de poid faible = 1 chiffre hexa (0 à 15)
  valAsc = digH + 0x30;
  if (digH > 9)
    valAsc += 0x07;
  return valAsc;
}


const int led1Pin = 2;
const int led2Pin = 3;
const int led3Pin = 4;
const int led4Pin = 5;
const int led5Pin = 6;
const int led6Pin = 7;
const int led7Pin = 8;
const int motorPin = 9;
const int pumpPin = 10;

void setup() {
  Serial.begin(9600);
  pinMode(led1Pin, OUTPUT);
  pinMode(led2Pin, OUTPUT);
  pinMode(led3Pin, OUTPUT);
  pinMode(led4Pin, OUTPUT);
  pinMode(led5Pin, OUTPUT);
  pinMode(led6Pin, OUTPUT);
  pinMode(led7Pin, OUTPUT);
  pinMode(motorPin, OUTPUT);
  pinMode(pumpPin, OUTPUT);
}

void loop() {
  if (Serial.available()) {
    String comando = Serial.readStringUntil('\n');
    if (comando == "Acionar M\n") {
      digitalWrite(motorPin, HIGH);
      Serial.println("Motor acionado.");
    } else if (comando == "Desligar M\n") {
      digitalWrite(motorPin, LOW);
      Serial.println("Motor desligado.");
    } else if (comando == "Acionar B\n") {
      digitalWrite(pumpPin, HIGH);
      Serial.println("Bomba ligada.");
    } else if (comando == "Desligar B\n") {
      digitalWrite(pumpPin, LOW);
      Serial.println("Bomba desligada.");
    } else if (comando == "Acionar B Temporizado\n") {
      // Ligar a bomba
      digitalWrite(pumpPin, HIGH);
      Serial.println("Bomba ligada.");
      delay(10000); // Esperar 10 segundos
      digitalWrite(pumpPin, LOW); // Desligar a bomba
      Serial.println("Bomba desligada.");
    } else if (comando == "Acionar L1\n") {
      digitalWrite(led1Pin, HIGH);
      Serial.println("LED 1 ligado.");
    } else if (comando == "Desligar L1\n") {
      digitalWrite(led1Pin, LOW);
      Serial.println("LED 1 desligado.");
    } else if (comando == "Acionar L2\n") {
      digitalWrite(led2Pin, HIGH);
      Serial.println("LED 2 ligado.");
    } else if (comando == "Desligar L2\n") {
      digitalWrite(led2Pin, LOW);
      Serial.println("LED 2 desligado.");
    } else if (comando == "Acionar L3\n") {
      digitalWrite(led3Pin, HIGH);
      Serial.println("LED 3 ligado.");
    } else if (comando == "Desligar L3\n") {
      digitalWrite(led3Pin, LOW);
      Serial.println("LED 3 desligado.");
    } else if (comando == "Acionar L4\n") {
      digitalWrite(led4Pin, HIGH);
      Serial.println("LED 4 ligado.");
    } else if (comando == "Desligar L4\n") {
      digitalWrite(led4Pin, LOW);
      Serial.println("LED 4 desligado.");
    } else if (comando == "Acionar L5\n") {
      digitalWrite(led5Pin, HIGH);
      Serial.println("LED 5 ligado.");
    } else if (comando == "Desligar L5\n") {
      digitalWrite(led5Pin, LOW);
      Serial.println("LED 5 desligado.");
    } else if (comando == "Acionar L6\n") {
      digitalWrite(led6Pin, HIGH);
      Serial.println("LED 6 ligado.");
    } else if (comando == "Desligar L6\n") {
      digitalWrite(led6Pin, LOW);
      Serial.println("LED 6 desligado.");
    } else if (comando == "Acionar L7\n") {
      digitalWrite(led7Pin, HIGH);
      Serial.println("LED 7 ligado."); } 
  }
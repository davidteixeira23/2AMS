#include <Servo.h>

Servo meuServo;

const int pinoServo = 9;
const int pinoBotao = 7;
const int pinoLED = 13;

void setup() {
  meuServo.attach(pinoServo);
  pinMode(pinoBotao, INPUT);
  pinMode(pinoLED, OUTPUT);
  meuServo.write(0);
  digitalWrite(pinoLED, LOW);
}

void loop() {
  if (digitalRead(pinoBotao) == HIGH) {
    delay(50);                    // debounce

    digitalWrite(pinoLED, HIGH);  // acende o LED
    
    meuServo.write(90);           // vai para 90°
    delay(5000);                  // fica 5 segundos em 90°
    meuServo.write(0);            // volta para 0°
    
    digitalWrite(pinoLED, LOW);   // apaga o LED

    while (digitalRead(pinoBotao) == HIGH);
    delay(50);
  }
}
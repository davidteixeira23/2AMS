#include <Servo.h>

Servo meuServo;

// Definição dos pinos
const int pinoServo = 9;
const int pinoBotao = 7;
const int pinoLEDVERMELHO = 12;
const int pinoLEDVERDE = 11;
const int pinoBuzzer = 10; // Declarado o pino do buzzer

void setup() {
  meuServo.attach(pinoServo);
  
  pinMode(pinoBotao, INPUT);
  pinMode(pinoLEDVERDE, OUTPUT);
  pinMode(pinoLEDVERMELHO, OUTPUT);
  pinMode(pinoBuzzer, OUTPUT); // Configurado como saída

  // Estado inicial do sistema
  meuServo.write(0);
  digitalWrite(pinoLEDVERMELHO, LOW);
  digitalWrite(pinoLEDVERDE, LOW);
}

void loop() {
  // Verifica se o botão foi pressionado
  if (digitalRead(pinoBotao) == HIGH) {
    delay(50); // Debounce para evitar falsos gatilhos

    // Fase 1: Alerta (LED Vermelho)
    digitalWrite(pinoLEDVERMELHO, HIGH);
    delay(2000);
    digitalWrite(pinoLEDVERMELHO, LOW);

    // Fase 2: Abertura/Ação (Servo a 90° + LED Verde + Bipe)
    meuServo.write(90);
    digitalWrite(pinoLEDVERDE, HIGH);
    tone(pinoBuzzer, 450, 100); // Som de 450Hz por 100ms
    
    delay(5000); // Mantém aberto por 5 segundos
    
    // Fase 3: Fechamento/Reset
    meuServo.write(0);
    digitalWrite(pinoLEDVERDE, LOW);

    // Espera o usuário soltar o botão para não repetir o loop direto
    while (digitalRead(pinoBotao) == HIGH);
    delay(50); // Debounce na saída
  }
}
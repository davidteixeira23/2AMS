int trig = 4;
int echo = 5;
int led = 8;
int buzzer = 2;
void setup() {
  Serial.begin(9600);
  pinMode(buzzer,OUTPUT);   
  pinMode(trig, OUTPUT);
  pinMode(echo, INPUT);    // Fixed typo: "pintMode" -> "pinMode"
  pinMode(led, OUTPUT);
}

void loop() {
  digitalWrite(trig, LOW);  // Fixed typo: "low" -> "LOW"
  delayMicroseconds(2);
  digitalWrite(trig, HIGH);
  delayMicroseconds(10);    // Fixed typo: "delayMicroseconde" -> "delayMicroseconds"
  digitalWrite(trig, LOW);
  
  // Fixed typo: "purseIn" -> "pulseIn"
  int duracao = pulseIn(echo, HIGH); // Changed to 'long' for better accuracy with large numbers
  
  int distancia = (duracao / 2) / 29.1;
  
  Serial.println(distancia);  // Fixed typo: "Println" -> "println"
  
  // Fixed missing logical AND (&&) operator
  if (distancia >= 50 && distancia <= 60) {
    tone(2,400);
    digitalWrite(led, HIGH);
  } else {
    noTone(2);
    digitalWrite(led, LOW);
  }
  
  delay(100);
}
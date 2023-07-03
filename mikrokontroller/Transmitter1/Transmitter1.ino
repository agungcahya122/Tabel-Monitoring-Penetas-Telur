#include <SoftwareSerial.h>
SoftwareSerial serial(6, 7);
String lux1, lux2, suhu1, suhu2, prox1, prox2, volt, arus;

void setup() {
  Serial.begin(9600);
  serial.begin(9600);
}

void loop() {
  lux1 = String(12.5);
  lux2 = String(10);
  suhu1 = String(2.3);
  suhu2 = String(34);
  prox1 = String(1.98);
  prox2 = String(103);
  volt = String(0.7);
  arus = String(2);


  Serial.println('#' + lux1 + '#' + lux2 + '#' + suhu1 + '#' + suhu2 + '#' + prox1 + '#' + prox2 + '#' + volt + '#' + arus + '#');
  serial.println('#' + lux1 + '#' + lux2 + '#' + suhu1 + '#' + suhu2 + '#' + prox1 + '#' + prox2 + '#' + volt + '#' + arus + '#');

  delay(1000);
}

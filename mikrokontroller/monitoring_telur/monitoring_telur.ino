#include <WiFi.h>
#include <HTTPClient.h>
#include <SoftwareSerial.h>
#include <SPI.h>
#include <Wire.h>

//variable untuk software serial (Rx, TX)
SoftwareSerial data_serial(13,12); 

const char *ssid = "penetastelur";
const char *password = "Tidakada";

String data_1;
String data_2;
String data_3;
String data_4;
String data_5;
String data_6;
String data_7;
String data_8;

String dataIn;

void setup() {
 Serial.begin (9600);
 data_serial.begin (9600); 

 koneksi();
 
}

void loop() {

  dataIn="";
  while(data_serial.available()>0){
    delay(10);
    char c = data_serial.read();
    dataIn = dataIn + c;    
  }
  if(dataIn.length()>0){
      parsingData(dataIn);
  }  

}

void parsingData(String dataIn) {
  data_1 = getValue(dataIn, '_', 1); //lux_1
  data_2 = getValue(dataIn, '_', 2); //lux_2
  data_3 = getValue(dataIn, '_', 3); //Suhu Array
  data_4 = getValue(dataIn, '_', 4); //Suhu Incubator
  data_5 = getValue(dataIn, '_', 5); //Proximity_1
  data_6 = getValue(dataIn, '_', 6); //Proximity_2
  data_7 = getValue(dataIn, '_', 7); //Blower
  data_8 = getValue(dataIn, '_', 8); //Arus

  Serial.print(data_1);
  Serial.print("\t");
  Serial.print(data_2);
  Serial.print("\t");
  Serial.print(data_3);
  Serial.print("\t");
  Serial.print(data_4);
  Serial.print("\t");
  Serial.print(data_5);
  Serial.print("\t");
  Serial.print(data_6);
  Serial.print("\t");
  Serial.print(data_7);
  Serial.print("\t");
  Serial.println(data_8);

  pushsql("https://penetastelur.promaydo.com/pt100.php?lux1="+ data_1  + String("&lux2=") + data_2 + String("&array=") + data_3 + String("&incub=") + data_4 + String("&prox1=") + data_5 + String("&prox2=") + data_6 + String("&blower=") + data_7 + String("&arus=") + data_8);

}

String getValue(String data, char separator, int index){
  int found = 0;
  int strIndex[] = {0, -1};
  int maxIndex = data.length()-1;
  for(int i = 0; i <= maxIndex && found <= index; i++){
    if(data.charAt(i)==separator || i==maxIndex){
        found++;
        strIndex[0] = strIndex[1]+1;
        strIndex[1] = (i == maxIndex) ? i+1 : i;
    }
  } 
  return found>index ? data.substring(strIndex[0], strIndex[1]) : "";
  
}

#include <SoftwareSerial.h> 

SoftwareSerial DataSerial (6,7); //Tx,Rx
void setup() {
  Serial.begin(9600);
  DataSerial.begin(9600);
  Serial.println("Connect !");
}

void loop() {

//  //baca permintaan  dari NodeMCU
//  String minta = "";
// 
//  //baca permintaan NodeMCU
//  while(Serial.available()>0){
//    minta += char(Serial.read()); 
//  }
//
//  //buang spasi data yang dikirim
//  minta.trim();
//
//  //uji variable minta
//  if (minta == "kirim"){
//    //kirim datanya
//    kirimdata();
//  }
//
//  //kosongkan variable minta
//  minta = "";
//  delay (1000); //request data ke NodeMCU setiap 1s
    kirimdata();
}

void kirimdata(){
  Serial.println("Data yang Dikirim");
  DataSerial.print("babi");

//  //baca nilai sensor
//  sensors.requestTemperatures();
//  float suhu1 = sensors.getTempCByIndex(0);
//
//  // variabel penampung data yang akan dikirim
//  String datakirim = String(suhu1);
//  
//  //kirim data ke nodemcu
//  Serial.println(suhu1); 
}

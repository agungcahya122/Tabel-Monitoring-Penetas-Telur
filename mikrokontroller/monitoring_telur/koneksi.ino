void koneksi(){
  SPI.begin ();
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid,password);
  Serial.println("Connecting");
  while (WiFi.status() != WL_CONNECTED){
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi Network!!!");
//  Serial.println("IP address:");
//  Serial.println(WiFi.localIP());
}

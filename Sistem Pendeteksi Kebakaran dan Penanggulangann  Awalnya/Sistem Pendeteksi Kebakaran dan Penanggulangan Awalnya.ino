int buzzer=7;
int pintu=5;
int sprink=6;
int api=4;
int asap=A0;
#define batas 150

void setup() {
  // Mendefinisikan Fungsi dari Pin yang Ingin Digunakan
  pinMode(buzzer, OUTPUT);
  pinMode(pintu, OUTPUT);
  pinMode(sprink, OUTPUT);
  pinMode(api, INPUT);
  pinMode(asap, INPUT);
  Serial.begin(9600);
}

void loop() {
  int NilaiApi=digitalRead(api);
  int NilaiAsap=analogRead(asap);
  Serial.print("Nilai Api:");
  Serial.println(NilaiApi);
  Serial.print("Nilai Asap:");
  Serial.println(NilaiAsap);
  digitalWrite(pintu, HIGH);

  if (NilaiAsap > batas||NilaiApi==0){
    digitalWrite(buzzer, HIGH);
    digitalWrite(sprink, HIGH);
    if (digitalRead(pintu==HIGH)){
      digitalWrite(pintu, LOW); 
    }else{}
    Serial.println("API TERDETEKSI!!!");
  }else{
    digitalWrite(buzzer,LOW);
    digitalWrite(sprink,LOW);
  }
  Serial.print("Kondisi Pintu :");
  Serial.println(digitalRead(pintu));
  Serial.print("Kondisi Sprink:");
  Serial.println(digitalRead(sprink));
  delay(1000);
}

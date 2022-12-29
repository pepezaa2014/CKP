#include <Servo.h>
Servo myservo;
int i = 0;
char c;
void setup() {
  Serial.begin(9600);
  myservo.attach(7);
}

void loop() {
//  if(Serial.available())
//  {
//    while(x<90)
//    {
//      x++;
//    myservo.write(x); 
//    }
//    while(x>90)
//    {
//      x--;
//      myservo.write(x);
//    }
    for(i<=90; i++;){
      myservo.write(i); 
    }
    for(i>=90; i++;){
      myservo.write(i); 
    }
    }
//  }
//  { 
//    c = Serial.read();
//  if (c=="n"){
//    Serial.println("ON");
//        myservo.write(0); 
//        delay(1500);      
//        myservo.write(90); 
//        delay(3000);
//        myservo.write(0); 
//        delay(1500);
//        c = "X";
//  }
//   }
  
//    if(Serial.available()){
//      c = Serial.read();
//      if(c == 'n'){
//      Serial.println("ON");
//      digitalWrite(7, HIGH);
//    }
//    if(c == 'f'){
//      Serial.println("OFF");
//      digitalWrite(7, LOW);
//    }
//    }

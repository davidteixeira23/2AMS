/**************************************************************/
/*				max mayfield								  */
/*				mm systems									  */
/*				max.mayfield@hotmail.com					  */
/*															  */
/*	code based from code on Arduino playground found here:	  */
/*	http://www.arduino.cc/playground/ComponentLib/Thermistor2 */
/**************************************************************/

/* ======================================================== */

#include "Arduino.h"
#include "Thermistor.h"

//--------------------------
Thermistor::Thermistor(int pin) {
  _pin = pin;
}

//--------------------------
double Thermistor::getTemp() {
  // Inputs ADC Value from Thermistor and outputs Temperature in Celsius
  int RawADC = analogRead(_pin);

  long Resistance;
  double Temp;

  // Assuming a 10k Thermistor.  Calculation is actually: Resistance = (1024/ADC)
  Resistance=((10240000/RawADC) - 10000);

  /******************************************************************/
  /* Utilizes the Steinhart-Hart Thermistor Equation:				*/
  /*    Temperature in Kelvin = 1 / {A + B[ln(R)] + C[ln(R)]^3}		*/
  /*    where A = 0.001129148, B = 0.000234125 and C = 8.76741E-08	*/
  /******************************************************************/
  Temp = log(Resistance);
  Temp = 1 / (0.001129148 + (0.000234125 * Temp) + (0.0000000876741 * Temp * Temp * Temp));
  Temp = Temp - 273.15;  // Convert Kelvin to Celsius

  /* - TESTING OUTPUT - remove lines with * to get serial print of data
  Serial.print("ADC: "); Serial.print(RawADC); Serial.print("/1024");  // Print out RAW ADC Number
  Serial.print(", Volts: "); printDouble(((RawADC*4.860)/1024.0),3);   // 4.860 volts is what my USB Port outputs.
  Serial.print(", Resistance: "); Serial.print(Resistance); Serial.print("ohms");
  */

  // Uncomment this line for the function to return Fahrenheit instead.
  //Temp = (Temp * 9.0)/ 5.0 + 32.0; // Convert to Fahrenheit

  return Temp;  // Return the Temperature
}

/* ======================================================== */
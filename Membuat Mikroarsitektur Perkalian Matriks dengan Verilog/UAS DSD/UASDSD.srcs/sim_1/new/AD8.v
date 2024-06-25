`timescale 1ns / 1ps
//////////////////////////////////////////////////////////////////////////////////
// Company: 
// Engineer: 
// 
// Create Date: 22.12.2023 13:51:46
// Design Name: 
// Module Name: AD8
// Project Name: 
// Target Devices: 
// Tool Versions: 
// Description: 
// 
// Dependencies: 
// 
// Revision:
// Revision 0.01 - File Created
// Additional Comments:
// 
//////////////////////////////////////////////////////////////////////////////////


module AD8(
input A0,
input A1,
input A2,
input A3,
input A4,
input A5,
input A6,
input A7,
input B0,
input B1,
input B2,
input B3,
input B4,
input B5,
input B6,
input B7,
output C0,
output C1,
output C2,
output C3,
output C4,
output C5,
output C6,
output C7,
output C8
    );
    wire W0;
    wire W1;
    wire W2;
    wire W3;
    wire W4;
    wire W5;
    wire W6;
    
    HA HA0(.A(A0),.B(B0),.S(C0),.Cout(W0));
    FA FA1(.A(A1),.B(B1),.Cin(W0),.S(C1),.Cout(W1));
    FA FA2(.A(A2),.B(B2),.Cin(W1),.S(C2),.Cout(W2));
    FA FA3(.A(A3),.B(B3),.Cin(W2),.S(C3),.Cout(W3));
    FA FA4(.A(A4),.B(B4),.Cin(W3),.S(C4),.Cout(W4));
    FA FA5(.A(A5),.B(B5),.Cin(W4),.S(C5),.Cout(W5));
    FA FA6(.A(A6),.B(B6),.Cin(W5),.S(C6),.Cout(W6));
    FA FA7(.A(A7),.B(B7),.Cin(W6),.S(C7),.Cout(C8));
endmodule

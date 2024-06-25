`timescale 1ns / 1ps
//////////////////////////////////////////////////////////////////////////////////
// Company: 
// Engineer: 
// 
// Create Date: 22.12.2023 13:55:16
// Design Name: 
// Module Name: MTX
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


module MTX(
input [7:0]a,
input [7:0]b,
input [7:0]c,
input [7:0]d,
input [7:0]e,
input [7:0]f,
output [16:0]x,
output [16:0]y
    );
    
    //row 1
    wire [15:0]o;
    wire [15:0]p;
    MX MX0(.A(a),.B(e),.M(o));
    MX MX1(.A(b),.B(f),.M(p));
    AD16 AD160(.A(o),.B(p),.S(x));
    
    //row 2
    wire [15:0]q;
    wire [15:0]r;
    MX MX2(.A(c),.B(e),.M(q));
    MX MX3(.A(d),.B(f),.M(r));
    AD16 AD161(.A(q),.B(r),.S(y));
endmodule

`timescale 1ns / 1ps
//////////////////////////////////////////////////////////////////////////////////
// Company: 
// Engineer: 
// 
// Create Date: 22.12.2023 14:09:15
// Design Name: 
// Module Name: AD16
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


module AD16(
input [15:0]A,
input [15:0]B,
output [16:0]S
    );
    wire [14:0]N;
    HA HA0(.A(A[0]),.B(B[0]),.S(S[0]),.Cout(N[0]));
    FA FA1(.A(A[1]),.B(B[1]),.Cin(N[0]),.S(S[1]),.Cout(N[1]));
    FA FA2(.A(A[2]),.B(B[2]),.Cin(N[1]),.S(S[2]),.Cout(N[2]));
    FA FA3(.A(A[3]),.B(B[3]),.Cin(N[2]),.S(S[3]),.Cout(N[3]));
    FA FA4(.A(A[4]),.B(B[4]),.Cin(N[3]),.S(S[4]),.Cout(N[4]));
    FA FA5(.A(A[5]),.B(B[5]),.Cin(N[4]),.S(S[5]),.Cout(N[5]));
    FA FA6(.A(A[6]),.B(B[6]),.Cin(N[5]),.S(S[6]),.Cout(N[6]));
    FA FA7(.A(A[7]),.B(B[7]),.Cin(N[6]),.S(S[7]),.Cout(N[7]));
    FA FA8(.A(A[8]),.B(B[8]),.Cin(N[7]),.S(S[8]),.Cout(N[8]));
    FA FA9(.A(A[9]),.B(B[9]),.Cin(N[8]),.S(S[9]),.Cout(N[9]));
    FA FA10(.A(A[10]),.B(B[10]),.Cin(N[9]),.S(S[10]),.Cout(N[10]));
    FA FA11(.A(A[11]),.B(B[11]),.Cin(N[10]),.S(S[11]),.Cout(N[11]));
    FA FA12(.A(A[12]),.B(B[12]),.Cin(N[11]),.S(S[12]),.Cout(N[12]));
    FA FA13(.A(A[13]),.B(B[13]),.Cin(N[12]),.S(S[13]),.Cout(N[13]));
    FA FA14(.A(A[14]),.B(B[14]),.Cin(N[13]),.S(S[14]),.Cout(N[14]));
    FA FA15(.A(A[15]),.B(B[15]),.Cin(N[14]),.S(S[15]),.Cout(S[16]));
endmodule

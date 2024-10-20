
MODEL SMALL
STACK 100h

CODE SEGMENT
    START:
        MOV AX, @DATA ; Carga segmento de datos
        MOV DS, AX

        MOV CX, 9 ; Inicializa contador en 9

    CYCLE:
        MOV AH, 02h ; Funci?n para mostrar caracter en pantalla
        ADD CX, 48 ; Convierte n?mero a caracter ASCII
        MOV DL, CL ; Carga caracter en DL
        INT 21h ; Muestra caracter en pantalla

        MOV AH, 02h ; Funci?n para mostrar caracter en pantalla
        MOV DL, 0Ah ; Salto de l?nea
        INT 21h ; Salto de l?nea
        MOV DL, 0Dh ; Retorno de carro
        INT 21h ; Retorno de carro

        SUB CX, 48 ; Restaura valor original de CX
        DEC CX ; Decrementa contador
        LOOP CYCLE ; Repite hasta CX = 0

        MOV AX, 4C00h ; Fin del programa
        INT 21h
CODE ENDS

DATA SEGMENT
DATA ENDS

END START


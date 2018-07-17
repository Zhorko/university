data segment
mes	db	13, 10, 'Pressed F'
a db ?
b db ?,'$'
data ends
code segment
assume ds:data, cs:code
start:
	mov ax,data
    mov ds,ax
input:	
	mov	ah, 8
	int	21h
	cmp al, 0
	je func
	jmp input
	
func:
	mov	ah, 8
	int	21h
	cmp al, 2Dh
	je stop
	cmp al, 3Bh
		je f1
	cmp al, 3Ch
		je f2
	cmp al, 3Dh
		je f3
	cmp al, 3Eh
		je f4
	cmp al, 3Fh
		je f5
	cmp al, 40h
		je f6
	cmp al, 41h
		je f7
	cmp al, 42h
		je f8
	cmp al, 43h
		je f9
	cmp al, 44h
		je f10
		jmp input
stop:
	mov ah,4ch
	mov al,0
	int 21h
f1:
	mov a, '1'
	jmp output
f2:
	mov a, '2'
	jmp output
f3:
	mov a, '3'
	jmp output
f4:
	mov a, '4'
	jmp output
f5:
	mov a, '5'
	jmp output
f6:
	mov a, '6'
	jmp output
f7:
	mov a, '7'
	jmp output
f8:
	mov a, '8'
	jmp output
f9:
	mov a, '9'
	jmp output
f10:
	mov a, '1'
	mov b, '0'
	jmp output
	
output:
	lea dx, mes
	mov ah,9
	int 21h
	mov b,' '
	jmp input
	
code ends
end start
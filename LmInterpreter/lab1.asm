stack1		segment stack
	dw	32 dup(?)
stack1		ends

data		segment
	stroka db 'George Zhuzha$'
data 		ends

code	segment
	assume cs:code, ds:data, ss:stack1
begin:		mov	ax, data
			mov ds, ax
			mov ah, 9h
			lea dx, stroka
			int 21h
		
exit:		mov	ah, 4ch
			mov al, 0
			int	21h
code	ends
			end	begin
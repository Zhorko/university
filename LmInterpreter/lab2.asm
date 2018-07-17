code	segment
	assume cs:code, ds:code
symb	db			112 dup('*')
begin:		mov		ax, code
			mov 	ds, ax
			
			mov		cx, 112
			mov		al, 255
			mov		si, 0
m:			mov		symb[si], al
			sub		al, 2 
			inc		si
			loop	m
			
			mov	ah, 40h
			mov	cx, 112
			mov	bx, 1
			lea dx, symb
			int	21h
			
			mov		ah, 4ch
			mov 	al, 0
			int		21h
code	ends
		end	begin
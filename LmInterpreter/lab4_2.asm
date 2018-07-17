dseg segment
	arr db 'do it now'
	len dw $-arr
	counter dw 0
dseg ends

cseg segment
	assume ds:dseg, cs:cseg
	extrn writer:near
start:
	mov ax, dseg
	mov ds, ax
	dec len
	mov si, len
		
loop1:
	cmp arr[si], ' '
	je stop
	dec si
	cmp si, 0
	je stop
	inc counter
	jmp loop1
	
stop:
	mov ax, counter
	call writer
	mov ah,4ch
	mov al,0
	int 21h
cseg ends
	end start
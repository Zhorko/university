dseg segment
	arr db 13, 11, 6, 2, 50
	n 	dw 5
	b 	db 2
	even_arr 		db 6 dup (?)
	even_arr_count 	dw 0
	odd_arr 		db 6 dup (?)
	odd_arr_count 	dw 0
	odd_letter 		dw
	even_letter 	dw
dseg ends

cseg segment
	assume ds:dseg, cs:cseg
	extrn writer:near
start:
	mov ax, dseg
	mov ds, ax
	mov si, 0
	mov di,0
	mov cx,0
	mov bx,0
	
check:
	inc cx
	mov ax,0
	mov al, arr[si]
	div b
	cmp ah, 0
	jne odd
	
evn:
	mov al, arr[si]
	mov even_arr[bx], al
	inc even_arr_count
	cmp cx,n
	je m2
	inc bx
	inc si
	jmp check
	
odd:
	mov al, arr[si]
	mov odd_arr[di], al
	inc odd_arr_count
	cmp cx,n
	je m2
	inc di

	inc si
	jmp check
	
m2:
	
	
	mov si, 0
	mov cx, even_arr_count
	
done1:
	mov ah,0
	mov al,even_arr[si]
	call writer
	inc si
	loop done1
	
	
	mov si, 0
	mov cx, odd_arr_count
done2:
	mov ah,0
	mov al,odd_arr[si]
	call writer
	inc si
	loop done2
	
	mov ah,4ch
	mov al,0
	int 21h
	
cseg ends
	end start
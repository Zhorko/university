data segment
    ;str1 dw 'min=$'
    ;str2 dw 'nom=$'
data ends
stack1 segment stack
    dw 100 dup (?)
stack1 ends
code segment
    assume ds:data,cs:code,ss:stack1
	extrn	read:near, writer:near
begin:
    mov ax, data
    mov ds, ax
    
    mov si, 0
    mov bx, 100
    mov di, 1
metka:
    call read
    cmp ax, 0
    jz close1
    inc si
    cmp ax,bx
    jng nomer
    jmp metka
nomer:
    mov bx, ax
    mov di, si
    jmp metka
close1:
    cmp ax, bx
	jnge repeate
    jmp close
repeate: 
    mov bx, ax
    inc si
	mov di, si
    jmp close	
close:
    ;mov ah, 9
    ;lea dx, str1
    ;int 21h
    mov ax, bx
    call writer
	;mov ah, 9
    ;lea dx, str2
    ;int 21h
    mov ax, di
    call writer
	mov ah, 4ch
	mov al, 0
	int 21h
code ends
     end begin
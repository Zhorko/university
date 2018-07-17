data segment
	std_pwd     db  'default'
    pass_len    dw  $-std_pwd
    message1    db  'Введенная строка длиннее (короче) правильного пароля на $'
    n           dw  ?, '$'
    message2    db  ' символов$'
    user_input  db  64 dup (?)

data ends
code segment
assume ds:data, cs:code
extrn writer:near

begin:      
    mov ax, data 
    mov ds, ax
    mov si, 0
    
input:
    mov ah, 1
    int 21h
    cmp al, 13
    je next_step
    ;mov ah, 1
    ;int 21h
    mov user_input[si], al
    inc di
    inc si
    jmp input
    
next_step:
    mov ax, pass_len
    cmp ax,  di
    je stop
    jb l
    
    
        cycleg:
        cmp di, 0
        je outputg
        dec di
        dec ax
        jmp cycleg
   
        outputg:
                mov n, ax
                jmp output
               
l: 
        cyclel:
        cmp ax, 0
        je outputl
        dec di
        dec ax
        jmp cyclel
   
        outputl:
                mov n, di
                jmp output 
                
output:
    mov ah, 9
    lea dx, message1
    int 21h
    lea dx, n
    int 21h
    lea dx, message2
    int 21h
stop:
    mov ah,4ch
    mov al,0
    int 21h
        
code ends
end begin
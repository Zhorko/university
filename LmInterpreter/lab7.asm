data segment
    curr     db  25
    tick     db  (?)
    ent      db  10, 13, '$'
    restore  db (?)
data ends
code segment
    assume ds:data, cs:code
start:
    mov ax,data
    mov ds,ax
    mov di, 0
nextstr:
    mov si, 0
    mov al, curr
    add curr, 25
cycle:
    cmp si, 24
    je enteer
    inc si
    cmp al, 34
    jb fillspace
    cmp al, 198
    je stop
    inc al 
    mov tick, al
    jmp output
    
        fillspace:
        inc al
        mov tick, ''
        jmp output

enteer:
    inc di
    cmp di, 6
    je stop
    mov ah, 9
    mov dx, offset ent; 
    int 21h
    jmp nextstr
output:
    mov restore, al
    mov ah, 40h
    mov bx, 1
    mov cx, 1
    mov dx, offset tick 
    int 21h
    mov al, restore
    jmp cycle
stop:
    mov ax, 4C00h
    int 21h
code ends
end start
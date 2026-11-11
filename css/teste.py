nota=float(input("Nota: "))

if nota>=18 and nota<=20:
    print("Excelente")
else:
    if nota>=16 and nota<18:
        print("Muito bom")
    else:
        if nota>=14 and nota<16:
            print("Bom")
        else:
            if nota>=10 and nota<14:
                print("Suficiente")
            else:
                if nota>=0 and nota<10:
                    print("Insuficiente")
                else:
                    print("Nota inválida")  
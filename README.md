# NFQ-Homework-1

#### calculateHomeWorkSum(...$numbers); //root namespace;
Nenurodomas parametru tipas nei grazinamos reiksmes tipas. Kadangi tipai yra nenurodyti tai grazinama suma buna double, nes vienas kintamasis buvo double
#### calculateHomeWorkSum(...$numbers): int; //Nfq\Akademija\NotTyped namespace;
Priima visus skaiciu tipus, bet suma grazinama, kaip int.
#### calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Soft namespace;
Paduodami kintamieji paverciami i int, suma grazinama, kaip int.
#### calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Strict namespace su declare(strict_types=1)
Sis metodas veikia tik tada, kai declare yra paskelbtas tame paciame faile is kurio kvieciamas metodas. strict_types=1 neleidzia paduoti ir grazinti kintamuju, kurie nera int.

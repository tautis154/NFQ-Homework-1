# NFQ-Homework-1

#### calculateHomeWorkSum(...$numbers); //root namespace;
Nenurodomas parametru tipas nei grazinamos reiksmes tipas. Kadangi tipai yra nenurodyti tai grazinama reiksme buna double, nes vienas kintamasis buvo double. Funkcijoje sudedami 3, 2.2, 1 ir yra grazinami, kaip double.
#### calculateHomeWorkSum(...$numbers): int; //Nfq\Akademija\NotTyped namespace;
Nenurodomas parametru tipas, taciau nurodoma, kad grazinama reiksme bus int. Funkcijoje sudedami 3, 2.2, 1 ir yra gražinami, kaip int, nes yra nurodyta, kad grazinta reiksme turi buti int.
#### calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Soft namespace;
Nurodomas parametru tipas bei grazinama reiksme. Paduoti kintamieji (3, 2.2, 1) paverciami i int ir sudejus visus kintamuosius yra grazinama int reiksme.
#### calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Strict namespace su declare(strict_types=1)
Nurodomas parametru tipas bei grazinama reiksme ir faile uzrasoma declare (strict_types=1), taciau sis declare veikia tik tada, kai declare yra paskelbtas tame paciame faile is kurio kvieciama funkcija, todėl paduoti kintamieji (3, 2.2, 1) paverciami i int ir sudejus visus kintamuosius yra grazinama int reiksme.

<?PHP
// dichiariamo le variabili esercizion 1
// $intero="1";
// $float="1.5";
// $stringa="proviamo";
// $boolean="true";
// print_r($intero,$float,$stringa,$boolean);

// eserciso 2


// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = '$text2';
// $text7 = 'bevuto';
// $text8 = "tutto";
// print_r($text1. ' ' .$text2. ' ' .$text3. '' .$text4. ' ' .$text5. ' ' .$text2. ' ' .$text7. ' ' .$text8. '.');




//esercizio 3

// $words1 = [
//     'una',  //0
//     67,  //1
//     'vita', //2
//     'colle',//3
//     'mi',//4
//     'rosso',//5
//     [//6
//       'oscura',//0
//       'era',//1
//       89,//2
//       [//3
//         'mezzo',//0
//         [//1
//           'cammin',//0
//           'Nel',//1
//           [//2
//             'selva',//0
//             'la',//1
//             [//2
//               'via',//0
//               'una',//1
//               true,//2
//             ]
//           ],
//         ]
//       ],
//       'ritrovai',//4
//       'per'//5
//     ],
//     'diritta'//7
//   ];
  
//   $words2 = [
//     'elemento1' => 25.89,
//     'elemento2' => 'nostra',
//     'elemento3' => [
//       'Virgilio',//0
//       'smarrita',//1
//       'ché'//2
//     ]
//   ];

// $result = $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' del ' . $words1[8] . ' ' . $words1[6][3][1][0] . ' di ' . $words2['elemento2'] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4]. ' ' .$words1[6][5]. ' ' .$words1[6][3][1][2][2][1]. ' ' . $words1[6][3][1][2][0]. ' ' .$words1[6][0]. ',' .$words2['elemento3'][2]. ' ' .$words1[6][3][1][2][1]. ' ' .$words1[7]. ' ' .$words1[6][3][1][2][2][0]. ' ' .$words1[6][1]. ' ' .$words2['elemento3'][1];

// var_dump($result);


// esercizio iniziato con implode va bene e funziona

// $results=[
//     $words1[6][3][1][1],
//     $words1[6][3][0],
//     'del',
//     $words1[6][3][1][0],
//     'di',
//     $words2['elemento2'],
//     $words1[2],
//     $words1[4],
//     $words1[6][4],
//     $words1[6][5],
//     $words1[6][3][1][2][2][1],
//     $words1[6][3][1][2][0],
//     $words1[6][0],
//     $words2['elemento3'][2],
// ];
// $result=` $results[0] + $results[1] `;
// print_r($result);
//   print_r("$war[0] + [1]");
// $result=implode(" ", $results);
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddSeriesToSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serie', function (Blueprint $table) {
            //
            DB::table('serie')->insert([

[
    'titulo' => "Sword Art Online Alicization - War of Underworld",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire1/1695b24f123889418228be89e00b9a0d1570828158_full.jpg',
    'wallpaper' => 'https://images3.alphacoders.com/733/thumb-1920-733061.png',
    'sinopse' => 'Escapar é impossível até o jogo ser completado, um game over significa uma verdadeira morte. Sem saber a verdade da misteriosa nova geração do RPG, Sword Art Online, aproximadamente 10 mil jogadores logaram juntos, abrindo as cortinas para essa cruel batalha mortal. Jogando sozinho, o protagonista Kirito imediatamente aceitou a verdade desse RPG, e no mundo do jogo, em um castelo flutuante gigante chamado Aincrad, ele se distinguiu como um jogador solitário. Buscando completar o jogo alcançando o andar mais alto, Kirito arriscadamente continua sozinho. Por causa de um convite agressivo de uma guerreira e especialista em esgrima, Asuna, ele se juntou a ela. Esse encontro trouxe uma oportunidade para chamar pelo destinado Kirito.',
    'created_at' => '2019-11-18 00:00:00',
    'updated_at' => '2019-11-18 00:00:00',
    'trailer' => 'tlZ20pwDmCE',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Assassins Pride",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire3/cc63e8a94f2028ff91b9c451e023e10a1570487820_full.jpg',
    'wallpaper' => 'https://d10xkldqejj5hr.cloudfront.net/news/2019/10/assassins-pride-simulcast-hidive-836x470.jpg',
    'sinopse' => 'Apenas membros de famílias nobres detêm o Mana, um poder que lhes torna capazes de enfrentar monstros. Kufa é um nobre, nascido numa família de duques, que é enviado para tutorar uma jovem chamada Merida. E em segredo, Kufa é encarregado de assassinar Merida caso ela não demonstre talento para utilizar o Mana.',
    'created_at' => '2019-11-18 00:00:00',
    'updated_at' => '2019-11-18 00:00:00',
    'trailer' => 'j5paOgPW3h0',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "High School Prodigies Have It Easy Even In Another World",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire1/ebc3cee0d3d66bc61c79c6a3bf4f3d2b1569965179_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Sete estudantes colegiais se acidentam numa queda de avião. Ao acordar, descobrem que estão num mundo paralelo, e naturalmente entram em pânico com os súbitos acontecimentos… Ou não? Ao invés disso, eles criam uma usina de energia num mundo sem luz, retribuem a gratidão dos cidadãos oprimidos derrubando seu governo corrupto, e basicamente fazem o que bem entendem! Esses colegiais não são normais – todos eles são prodígios nos campos da política, economia, ciência e medicina. Este é um conto sobre um time dos sonhos de colegiais, jogados num mundo onde o avanço da ciência não existe.',
    'created_at' => '2019-11-21 00:00:00',
    'updated_at' => '2019-11-21 00:00:00',
    'trailer' => 'QSFXJzpEpqs',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "KONOSUBA -God's blessing on this wonderful world!",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire3/7ba81b1709a87f5ca8930229b10029a61484092235_full.jpg',
    'wallpaper' => 'https://wallpaperaccess.com/full/1290892.jpg',
    'sinopse' => 'A vida de Satou Kazuma, um hikikomori que ama jogos, muito cedo chegou ao fim por causa de um acidente de trânsito… Era o que parecia, mas, quando ele acordou, uma bela garota que se autointitula uma deusa estava em frente aos seus olhos. “Ei, eu tenho algo um pouco agradável para você. Quer ir para um outro mundo? Você pode ter apenas uma coisa de sua escolha junto com você”. ”…Então eu vou levá-la”. Daqui em diante, a grande aventura de derrubar o grande Rei Demônio começará para o reencarnado Kazuma… Bem, é isso o que se poderia pensar, mas é o trabalho para a obtenção de alimentos, roupas e abrigos que começa! Apesar de ele querer viver em paz, a deusa continua causando problemas, um após o outro, e, eventualmente, eles atraem a atenção do exército do rei demônio?!',
    'created_at' => '2019-11-21 00:00:00',
    'updated_at' => '2019-11-21 00:00:00',
    'trailer' => '5h4rQY9bpgE',
    'tipo' => 'anime',
    'ano_lancamento' => '2016'
    ],

    [
    'titulo' => "One Punch Man",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire2/486f88e5889422c72ab7b12a58f794721554828665_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Saitama se tornou um herói por hobbie. Após três anos de um treinamento “especial”, ele se tornou tão forte que é praticamente invencível. Na verdade, ele é forte demais! Até mesmo o mais poderoso dos inimigos é derrotado em um soco só, mas, com uma vida sem desafios, ele sofre com o tédio e a depressão… Mesmo perdendo a sua paixão pelo heroísmo junto ao seu cabelo, ele ainda é confrontado por inimigos diariamente. Por quanto tempo ele ainda conseguirá seguir este caminho?',
    'created_at' => '2019-11-21 00:00:00',
    'updated_at' => '2019-11-21 00:00:00',
    'trailer' => '78ngg0SRlEI',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Boku no Hero Academia",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire2/cccce22d1dfaaf713284a617ee0b539a1572467883_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'É chegado o verão, e os heróis das Salas 1-A e 1-B estão se preparando para o acampamento de treino mais duro da vida deles! Um grupo de profissionais veteranos vai levar cada um dos Dons dos estudantes ao seu limite, e os jovens heróis terão que enfrentar um desafio avassalador atrás do outro! Mas vencer a força da natureza em seu acampamento secreto será o menor de seus problemas, quando o treino de rotina se transformar numa luta desesperada por sobrevivência.',
    'created_at' => '2019-11-22 00:00:00',
    'updated_at' => '2019-11-22 00:00:00',
    'trailer' => '3Ec6aZjaZfI',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Naruto",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire2/0145388e3ecfdb5a63ce1e9feaeef44a1279141923_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'A Vila Oculta da Folha é lar dos ninjas mais sorrateiros. Mas doze anos atrás, uma temível Raposa de Nove Caudas aterrorizou a vila, até ser derrotada e selada no corpo de um garoto recém-nascido.',
    'created_at' => '2019-11-22 00:00:00',
    'updated_at' => '2019-11-22 00:00:00',
    'trailer' => 'SRn99oN1p_c',
    'tipo' => 'anime',
    'ano_lancamento' => '2002'
    ],

    [
    'titulo' => "No Game No Life",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire1/5a4525c6fc5508fa27f0ed229ad2cbde1396985147_full.jpg',
    'wallpaper' => 'https://images6.alphacoders.com/512/thumb-1920-512323.jpg',
    'sinopse' => 'A internet está cheia de rumores sobre um jogador conhecido como “em branco”. Que, na verdade, são dois irmãos viciados em games. Eles dizem acreditar que o mundo não passa de um “jogo de merda”. Mas um dia, ao receber um e-mail estranho e vencer o jogo contido nele, eles são convocados por um garoto que se diz “Deus” a conhecer outro mundo. Lá, Deus proibiu a guerra, e “tudo deve ser resolvido com os jogos”. Sim, até mesmo as fronteiras do país. Podem Sora e Shiro, dois irmãos com problemas com a sociedade, tornarem-se os salvadores da humanidade neste mundo paralelo?',
    'created_at' => '2019-11-22 00:00:00',
    'updated_at' => '2019-11-22 00:00:00',
    'trailer' => '6CBp4qylX6I',
    'tipo' => 'anime',
    'ano_lancamento' => '2014'
    ],

    [
    'titulo' => "Grey's Anatomy",
    'nota' => 8,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/19/09/27/16/02/1915855.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Os médicos do Grey Sloan Memorial Hospital lidam diariamente com casos e consequências de vida ou morte. É um no outro que eles encontram apoio, conforto, amizade e, às vezes, até mais que amizade... Juntos, eles descobrem o quanto a vida profissional e a pessoal podem ser complicadas e se misturarem no meio do caminho.',
    'created_at' => '2019-11-23 00:00:00',
    'updated_at' => '2019-11-23 00:00:00',
    'trailer' => '_uzH4dDfL5c',
    'tipo' => 'serie',
    'ano_lancamento' => '2005'
    ],

    [
    'titulo' => "La Casa de Papel",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/19/06/21/19/52/3355532.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Oito habilidosos ladrões se trancam na Casa da Moeda da Espanha com o ambicioso plano de realizar o maior roubo da história e levar com eles mais de 2 bilhões de euros. Para isso, a gangue precisa lidar com as dezenas de pessoas que manteve como refém, além dos agentes da força de elite da polícia, que farão de tudo para que a investida dos criminosos fracasse.',
    'created_at' => '2019-11-25 00:00:00',
    'updated_at' => '2019-11-25 00:00:00',
    'trailer' => 'VaqMTLNhSvM',
    'tipo' => 'serie',
    'ano_lancamento' => '2017'
    ],

    [
    'titulo' => "One Piece",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/8056a82e973dde98ebb82abd39dc69731564519729_full.jpg',
    'wallpaper' => 'https://images6.alphacoders.com/883/883613.jpg',
    'sinopse' => 'Houve um homem que conquistou tudo aquilo que o mundo tinha a oferecer, o lendário Rei dos Piratas, Gold Roger. Capturado e condenado à execução pelo Governo Mundial, suas últimas palavras lançaram legiões aos mares. “Meu tesouro? Se quiserem, podem pegá-lo. Procurem-no! Ele contém tudo que este mundo pode oferecer!”. Foi a revelação do maior tesouro, o One Piece, cobiçado por homens de todo o mundo, sonhando com fama e riqueza imensuráveis… Assim começou a Grande Era dos Piratas!',
    'created_at' => '2019-11-25 00:00:00',
    'updated_at' => '2019-11-25 00:00:00',
    'trailer' => 't7xHamn5inQ',
    'tipo' => 'anime',
    'ano_lancamento' => '1999'
    ],

    [
    'titulo' => "Riverdale",
    'nota' => 9,
    'imagem' => 'http://br.web.img2.acsta.net/c_216_288/pictures/18/09/06/10/23/3151996.jpg',
    'wallpaper' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSOyyUkn8-Rii3HL_Z3fCNrH3bR_YZ_BAeSCEgP5Jn4i4I03IGM',
    'sinopse' => 'Riverdale traz uma abordagem subversiva de Archie (KJ Apa), Betty (Lili Reinhart), Veronica (Camila Mendes), Jughead Jones (Cole Sprouse), Josie (Ashleigh Murray) e seus amigos, explorando o surrealismo de uma pequena cidade e seus curiosos habitantes. A história começa quando a cidade se recupera de uma trágica perda, o que leva Archie a pensar mais seriamente a respeito de seu futuro. Com isto, ele embarca em uma jornada em busca de realizar o seu sonho de tornar um grande músico; mas cumprir essa missão não será nada fácil, enquanto Archie ainda precisa lidar com sua agitada vida amorosa, dividido entre Betty e Veronica.',
    'created_at' => '2019-11-25 00:00:00',
    'updated_at' => '2019-11-25 00:00:00',
    'trailer' => 'HxtLlByaYTc',
    'tipo' => 'serie',
    'ano_lancamento' => '2017'
    ],

    [
    'titulo' => "The 100",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/19/05/02/21/08/3498949.jpg',
    'wallpaper' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRvFhtHr5QG_04AoyzHfn7AVWdmhG4NhNIj4g449pGsnXa7DHTy',
    'sinopse' => 'Quando uma guerra nuclear destruiu a civilização e o planeta Terra, os únicos sobreviventes foram 400 pessoas que estavam em 12 estações espaciais em órbita. 97 anos e três gerações depois, a população já contava com 4 mil pessoas, mas os recursos já vão escassos. Para garantir o futuro, um grupo de cem jovens é enviado à superfície da Terra para descobrir se ela está habitável. Com a sobrevivência da raça humana em suas mãos, estes jovens precisam superar suas diferenças e unir forças para cruzar juntos o seu caminho.',
    'created_at' => '2019-11-25 00:00:00',
    'updated_at' => '2019-11-25 00:00:00',
    'trailer' => 'G-PpFU6tuek',
    'tipo' => 'serie',
    'ano_lancamento' => '2014'
    ],

    [
    'titulo' => "Lucifer",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/19/05/16/15/02/4273230.jpg',
    'wallpaper' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTwubqbYKKJxr52vmxiP1G1DkOxF20wknerp57Hh761d2-F7TSS',
    'sinopse' => 'Lúcifer (Tom Ellis), também conhecido como o Senhor do Inferno, se cansa da vida demoníaca que leva no subterrâneo e decide se mudar para Los Angeles. Lá, ele passa a ajudar a polícia local a cercar e punir malfeitores.',
    'created_at' => '2019-11-25 00:00:00',
    'updated_at' => '2019-11-25 00:00:00',
    'trailer' => 'X4bF_quwNtw',
    'tipo' => 'serie',
    'ano_lancamento' => '2016'
    ],

    [
    'titulo' => "Tensei shitara Slime Datta Ken",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/15a59c8efa8ea6cccb53fff530c2f1921548272848_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Minami Satoru, funcionário de uma megacorporação, é apunhalado por um assassino nas ruas e renasce num mundo paralelo… Mas ele renasce como um slime! Jogado neste novo mundo com o nome Rimuru, ele assume a missão de criar um mundo que seja acolhedor para todas as raças.',
    'created_at' => '2019-11-25 00:00:00',
    'updated_at' => '2019-11-25 00:00:00',
    'trailer' => 'GhGTc6p8sg0',
    'tipo' => 'anime',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Fullmetal Alchemist: Brotherhood",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/fabddf1040abbd18948b9aacc18011b31475523493_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'A história gira em torno dos irmãos Edward e Alphonse Elric que estão em busca da Pedra Filosofal, uma coisa capaz de ignorar as leis que regem a prática da alquimia (como a troca equivalente) e com poder suficiente para retornar os corpos dos mesmos ao normal.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => '2uq34TeWEdQ',
    'tipo' => 'anime',
    'ano_lancamento' => '2009'
    ],

    [
    'titulo' => "Re:Zero kara Hajimeru Isekai Seikatsu",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire2/95445cd55c37ce2ff04ef1adde79f50c1529088362_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'O aluno colegial Natsuki Subaru foi invocado de repente para outro mundo enquanto voltava da loja de conveniência. Com a maior crise de sua vida sendo levado a outro mundo e sem sinal algum de quem o tenha invocado, as coisas ficam piores ainda quando ele é atacado. Mas então ele é salvo por uma misteriosa garota de cabelos prateados com um gato fada e Subaru se junta a ela para retribuir o favor. Quando finalmente conseguem uma pista, Subaru e a garota são atacados e mortos por alguém. Subaru então acorda no lugar que foi invocado e percebe que ganhou a habilidade “Retorno Por Morte” e se tornou um garoto inútil que só tem a habilidade de voltar no tempo morrendo. Apesar do desespero, ele pode salvar a garota da morte certa?',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => '0Vwwr3VGsYg',
    'tipo' => 'anime',
    'ano_lancamento' => '2016'
    ],

    [
    'titulo' => "Dumbbell Nan Kilo Moteru?",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire1/976529de8c171ff57b1b4ff96d972aa71558524439_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => '“Hibiki… você está gorda de novo?” As palavras cruéis de um amigo que cortam como uma faca no coração de Hibiki Sakura, uma garota do ensino médio que adora comer. Hibiki decidiu fazer dieta para ser absolutamente magra nas férias de verão, mas ela não pode continuar se exercitando sozinha. Foi quando Hibiki se encontrou diante de uma academia de treinamento! Ao entrar no ginásio, Hibiki encontra sua linda e carismática presidente do conselho estudantil, Akemi Souryuuin, e entra no intenso, mas agradável, mundo do treinamento com pesos.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'ULjbIMvP6A0',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Kimetsu no Yaiba",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire3/f1fe5c7a43cb2f38f4152a58f89479821554508873_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Japão, era Taisho. Tanjiro, um bondoso jovem que ganha a vida vendendo carvão, descobre que sua família foi massacrada por um demônio. E pra piorar, Nezuko, sua irmã mais nova e única sobrevivente, também foi transformada num demônio. Arrasado com esta sombria realidade, Tanjiro decide se tornar um matador de demônios para fazer sua irmã voltar a ser humana, e para matar o demônio que matou sua família. Um triste conto sobre dois irmãos, onde os destinos dos humanos e dos demônios se entrelaçam, começa agora.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'VQGCKyvzIM4',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Naruto Shippuuden",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/1c1df98707aa0f22aa54342af725e48a1491245343_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Uzumaki Naruto quer ser o melhor ninja de todos. Ele está indo muito bem, mas com o perigo iminente imposto pela misteriosa Akatsuki, Naruto percebe que ele deve treinar mais que nunca e deixa sua Vila para um intenso treinamento que o pressiona contra seus limites.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'aJRu5ltxXjc',
    'tipo' => 'anime',
    'ano_lancamento' => '2007'
    ],

    [
    'titulo' => "Rakudai Kishi no Cavalry",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire1/2e0676fb1eebf156fe96ffb29b1681891543532662_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Os Cavaleiros Mágicos, usuários de magia modernos que lutam com armas convertidas de suas almas. Kurogane Ikki frequenta uma escola para esses Cavaleiros Mágicos, mas é o “Cavaleiro Fracassado” ou “O Pior” que falhou por não ter habilidades mágicas. No entanto, certo dia, ele é desafiado para um duelo por Stella, uma princesa estrangeira e a aluna número um. Neste duelo, o perdedor deve obedecer o vencedor pelo resto da vida.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'iCKk6qhBkpc',
    'tipo' => 'anime',
    'ano_lancamento' => '2015'
    ],

    [
    'titulo' => "Shingeki no Kyojin",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire1/13b484b48acc14537703fbc505b087121558560482_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Eren Jaeger jurou eliminar todos os Titãs, mas em uma batalha desesperada ele se torna aquilo que mais odeia. Com seus novos poderes, ele luta pela liberdade da humanidade, combatendo os monstros que ameaçam seu lar. Mesmo depois de derrotar a Titã Fêmea, Eren não consegue descansar – uma horda de Titãs se aproximam da Muralha Rose e a batalha em nome da humanidade continua!',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'CID-sYQNCew',
    'tipo' => 'anime',
    'ano_lancamento' => '2013'
    ],

    [
    'titulo' => "Darling in the FranXX",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/e8e3c09f8450c3d8a90a03e2198688f61515484130_full.jpg',
    'wallpaper' => 'https://wallpapercave.com/wp/wp2475712.jpg',
    'sinopse' => 'Eles sonham um dia voar pelo céu sem fim, mesmo cientes do quão imenso é o céu além da vidraça que bloqueia seu voo. Futuro distante: a humanidade se estabeleceu na cidade-fortaleza de Plantation, erguida sobre os destroços da guerra, e a civilização floresceu. Nessa cidade, há o Mistilteinn, um quartel de pilotos também conhecido como Gaiola. É lá que as crianças vivem… Alheios ao mundo de fora e da vastidão dos céus. Sua única missão em vida é lutar. Seus inimigos são os Kyoryu, gigantescos organismos misteriosos. As crianças operam robôs chamados FRANXX para enfrentar esses inimigos desconhecidos, crentes de que esse é seu objetivo de vida. Dentre eles, um garoto era considerado um prodígio: Hiro, serial 016. Contudo, agora ele é considerado uma falha, alguém desnecessário. Aqueles incapazes de pilotar FRANXX basicamente não existem. Um dia, uma misteriosa garota chamada 02 aparece para Hiro. De seu rosto, crescem dois curiosos chifres. “Eu te encontrei, meu Darling.”',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'A4kLcDWBYcQ',
    'tipo' => 'anime',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "The Flash",
    'nota' => 9,
    'imagem' => 'http://br.web.img2.acsta.net/c_216_288/pictures/17/09/29/21/15/4233147.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Barry Allen (Grant Gustin) era um funcionário da Polícia Científica que, ao sofrer um acidente, foi banhado por produtos químicos em seu laboratório e, em seguida, atingido por um raio. Foi a partir disso que ele começou a ser capaz de canalizar os poderes vindos do "Campo de Velocidade", e se locomover em altíssimas velocidades. Usando uma máscara e um uniforme vermelho, ele começa a usar suas habilidades para patrulhar Central City com a ajuda dos cientistas da S.T.A.R. Labs, e detém vilões ao mesmo tempo em que procura descobrir quem foi o assassino de sua mãe.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => '0yzytPs2ivo',
    'tipo' => 'serie',
    'ano_lancamento' => '2014'
    ],

    [
    'titulo' => "The Big Bang Theory",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/14/01/23/13/30/209537.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Leonard e Sheldon podem lhe dizer tudo o que você quiser saber sobre física quântica. Mas eles não seriam capazes de lhe dizer nada sobre a vida "real", as relações diárias ou humanas... Mas tudo vai mudar com a chegada da bela vizinha Penny, uma garçonete candidata a atriz que movimentará o grupo de amigos, que conta ainda com as presenças de Howard e Raj, um indiano que não consegue falar com mulheres.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'BCL-dJLiMuI',
    'tipo' => 'serie',
    'ano_lancamento' => '2007'
    ],

    [
    'titulo' => "Sherlock",
    'nota' => 10,
    'imagem' => 'http://br.web.img2.acsta.net/c_216_288/pictures/14/01/06/14/35/382626.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'O dr. John Watson precisa de um lugar para morar em Londres. Ele é apresentado ao detetive Sherlock Holmes e os dois acabam desenvolvendo uma parceria intrigante, na qual a dupla vagará pela capital inglesa solucionando assassinatos e outros crimes brutais. Tudo isso em pleno século XXI.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'xK7S9mrFWL4',
    'tipo' => 'serie',
    'ano_lancamento' => '2010'
    ],

    [
    'titulo' => "The Witcher",
    'nota' => 7,
    'imagem' => 'http://br.web.img2.acsta.net/c_216_288/pictures/19/07/01/16/48/4133442.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Um grupo de jovens com habilidades peculiares encara a difícil missão de combater as criaturas mais perigosas do planeta Terra. Conhecidos como bruxos, cada membro desenvolveu muito cedo capacidades sobrenaturais a fim de encararem uma desafiante caçada aos monstros e manterem a humanidade em segurança.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'cSqi-8kAMmM',
    'tipo' => 'serie',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Breaking Bead",
    'nota' => 8,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/14/03/31/19/28/462555.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Walter White (Bryan Cranston) é um professor de química na casa dos 50 anos que trabalha em uma escola secundária no Novo México. Para atender às necessidades de Skyler (Anna Gunn), sua esposa grávida, e Walt Junior (RJ Mitte), seu filho deficiente físico, ele tem que trabalhar duplamente. Sua vida fica ainda mais complicada quando descobre que está sofrendo de um câncer de pulmão incurável. Para aumentar rapidamente a quantidade de dinheiro que deixaria para sua família após sua morte, Walter usa seu conhecimento de química para fazer e vender metanfetamina, uma droga sintética. Ele conta com a ajuda do ex-aluno e pequeno traficante Jesse (Aaron Paul) e enfrenta vários desafios, incluindo o fato de seu concunhado ser um importante nome dentro da Agência Anti-Drogas da região.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'ceqOTZnhgY8',
    'tipo' => 'serie',
    'ano_lancamento' => '2008'
    ],

    [
    'titulo' => "Game of Thrones",
    'nota' => 10,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/19/03/21/16/15/4239577.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Há muito tempo, em um tempo esquecido, uma força destruiu o equilíbrio das estações. Em uma terra onde os verões podem durar vários anos e o inverno toda uma vida, as reivindicações e as forças sobrenaturais correm as portas do Reino dos Sete Reinos. A irmandade da Patrulha da Noite busca proteger o reino de cada criatura que pode vir de lá da Muralha, mas já não tem os recursos necessários para garantir a segurança de todos. Depois de um verão de dez anos, um inverno rigoroso promete chegar com um futuro mais sombrio. Enquanto isso, conspirações e rivalidades correm no jogo político pela disputa do Trono de Ferro, o símbolo do poder absoluto.',
    'created_at' => '2019-11-26 00:00:00',
    'updated_at' => '2019-11-26 00:00:00',
    'trailer' => 'Ah5LiqkKBTo',
    'tipo' => 'serie',
    'ano_lancamento' => '2011'
    ],

    [
    'titulo' => "The Originals",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/17/03/20/15/50/384071.jpg',
    'wallpaper' => 'http://getwallpapers.com/wallpaper/full/9/3/d/144810.jpg',
    'sinopse' => 'Um spin-off de The Vampire Diaries, que se passa em New Orleans. A série é centrada nos irmãos Mikaelson, que são conhecidos como os vampiros originais do mundo: Klaus (Joseph Morgan), Elijah (Daniel Gilles), e Rebekah (Claire Holt). Séculos atrás, eles prometeram ficar juntos para sempre e proteger uns aos outros. Agora, os laços familiares quebrados, tragédia e fome recaem como maldição àqueles que não cumpriram seus votos.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'GXrDYboUnnw',
    'tipo' => 'serie',
    'ano_lancamento' => '2013'
    ],

    [
    'titulo' => "Blindspot",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/18/05/22/19/39/4653775.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'A história de um agente do FBI que, misteriosamente, se vê em meio a uma conspiração. A história começa quando Jane Doe (Jaimie Alexander), completamente sem memória, é encontrada nua no meio da Times Square, em Nova York, com o corpo coberto de tatuagens recentes. E uma dessas tatuagens é o nome do agente do FBI Kurt Weller (Sullivan Stapleton). Agora, ele terá que desvendar os mistérios: Quem é esta mulher e o que significam suas tatuagens?',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'RqZkit-aCTo',
    'tipo' => 'serie',
    'ano_lancamento' => '2015'
    ],

    [
    'titulo' => "The Walking Dead",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/19/10/15/00/25/3540279.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Um apocalipse provoca uma infestação de zumbis na cidade de Cynthiana, em Kentucky, nos Estados Unidos, e o oficial de polícia Rick Grimes (Andrew Lincoln) descobre que os mortos-vivos estão se propagando progressivamente. Ele decide unir-se aos homens e mulheres sobreviventes para que tenham mais força para combater o fenômeno que os atinge. O grupo percorre diferentes lugares em busca de soluções para o problema.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'R1v0uFms68U',
    'tipo' => 'serie',
    'ano_lancamento' => '2010'
    ],

    [
    'titulo' => "Manifest",
    'nota' => 8,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/18/05/13/23/24/1169169.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Um grupo de pessoas sobrevive a um voo turbulento apenas para, ao chegar na terra em segurança, perceber que o que para eles pareceu algumas horas no ar, na verdade foram cinco anos para o resto do mundo. Suas famílias acreditavam que eles estavam mortos e já haviam perdido toda a esperança, mas agora eles recebem uma segunda chance. Tentando se acostumar com suas novas realidades, esses passageiros se veem parte de mistérios mais profundos do que jamais poderiam imaginar.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'tGe8lqlolFE',
    'tipo' => 'serie',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Arrow",
    'nota' => 8,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/17/10/02/19/20/5681659.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Playboy, milionário e mulherengo, Oliver Queen (Stephen Amell) está presumivelmente morto há 5 anos, quando um acidente de iate causou o desaparecimento dele, de seu pai, Robert (Jamey Sheridan), e Sara Lance, irmã de sua então namorada Laurel (Katie Cassidy). Mas Ollie sobreviveu e, preso em uma ilha, ele aprendeu a lutar por sua vida. De volta à civilização em Starling City, ele é um homem mudado e está decidido a honrar a memória do pai e livrar a cidade da corrupção. Disfarçado, ele usa as habilidades que aprendeu durante seu tempo de reclusão para isso, e ao mesmo tempo precisa esconder sua nova identidade da mãe, Moira (Susanna Thompson), da irmã, Thea (Willa Holland) e dos amigos.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'OOl7ddOziII',
    'tipo' => 'serie',
    'ano_lancamento' => '2012'
    ],

    [
    'titulo' => "Vis a Vis",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/16/03/10/09/39/100264.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Macarena Ferreiro é uma jovem ingênua que se apaixonou pelo patrão e agora está presa por causa dele. Acusada de cometer quatro crimes fiscais, ela precisa enfrentar o choque emocional que é estar na cadeia, enquanto sua família procura um jeito de pagar a fiança e libertá-la da Penitenciária de Cruz del Sur.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'N08KRAPzsHU',
    'tipo' => 'serie',
    'ano_lancamento' => '2015'
    ],

    [
    'titulo' => "Hospital New Amsterdam",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/18/08/27/11/22/4429377.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Inspirada no histórico hospital de Nova Iorque, Bellevue, a série acompanha o charmoso Dr. Max Goodwin (Ryan Eggold), o mais novo diretor médico do hospital. Empenhado em dar nova vida ao hospital, Dr. Goodwin luta contra a burocracia e a falta de fundos para trazer a instituição de volta aos seus dias de glória.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'ZvMCbzrToAo',
    'tipo' => 'serie',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "O mecanismo",
    'nota' => 9,
    'imagem' => 'http://br.web.img2.acsta.net/c_216_288/pictures/19/04/29/17/20/4695230.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Marco Ruffo (Selton Mello) é um delegado aposentado da Polícia Federal obcecado pelo caso que está investigando. Quando menos espera, ele e sua aprendiz, Verena Cardoni (Carol Abras), já estão mergulhados em uma das maiores investigações de desvio e lavagem de dinheiro da história do Brasil. A proporção é tamanha que o rumo das investigações muda completamente a vida de todos os envolvidos.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => '80NBF4O-guM',
    'tipo' => 'serie',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Supernatural",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/18/11/12/13/38/3629995.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Desde que era pequeno, Sam Winchester (Jared Padalecki) tentava escapar do próprio passsado. Após a misteriosa morte de Mary (Samantha Smith), o pai de Sam passou a procurar vingança contra as forças do mal que mataram a esposa, destruindo qualquer ser maligno que cruze o seu caminho. Ao contrário de Sam, Dean (Jensen Ackles), irmão mais velho, sempre quis seguir os passos do pai. Sam está determinado a se livrar do "negócio da família", mas sua vida está prestes a tomar os rumos que ele não desejava, quando ele fica sem escolhas a não ser unir-se ao irmão.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => '_hlkNQL5Ecg',
    'tipo' => 'serie',
    'ano_lancamento' => '2005'
    ],

    [
    'titulo' => "13 Reasons Why",
    'nota' => 8,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/18/05/07/20/59/0631046.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Uma caixa de sapatos é enviada para Clay (Dylan Minnette) por Hannah (Katherine Langford), sua amiga e paixão platônica secreta de escola. O jovem se surpreende ao ver o remetente, pois Hannah acabara de se suicidar. Dentro da caixa, há várias fitas cassete, onde a jovem lista os 13 motivos que a levaram a interromper sua vida - além de instruções para elas serem passadas entre os demais envolvidos.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'p3Q1IjfBIm0',
    'tipo' => 'serie',
    'ano_lancamento' => '2017'
    ],

    [
    'titulo' => "Siren",
    'nota' => 8,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/18/01/04/18/12/2144851.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'A captura de uma criatura marinha feroz por pescadores de um vilarejo no noroeste do oceano pacífico abala as estruturas do local. A descoberta parece desafiar tudo que os habitantes achavam que sabiam sobre o mar, pois tudo indica que se trata de uma sereia.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'nX5XZ3brFZo',
    'tipo' => 'serie',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Stranger Things",
    'nota' => 9,
    'imagem' => 'http://br.web.img2.acsta.net/c_216_288/pictures/19/07/10/20/01/2331295.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Quando Will (Noah Schnapp), um menino de doze anos, desaparece misteriosamente, o xerife Jim Hopper (David Harbour) inicia uma operação para encontrá-lo. Enquanto isso, Mike (Finn Wolfhard), Dustin (Gaten Matarazzo) e Lucas (Caleb McLaughlin), melhores amigos do garoto, decidem procurar Will por conta própria. Mas as investigações acabam os levando a experimentos secretos do governo e a uma peculiar menina perdida na floresta.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'b9EkMc79ZSU',
    'tipo' => 'serie',
    'ano_lancamento' => '2016'
    ],

    [
    'titulo' => "Vikings",
    'nota' => 9,
    'imagem' => 'http://br.web.img3.acsta.net/c_216_288/pictures/17/10/16/18/50/5552678.jpg?coixp=50&coiyp=43',
    'wallpaper' => NULL,
    'sinopse' => 'Ragnar Lothbrok (Travis Fimmel) é o maior guerreiro da sua era. Lider de seu bando, com seus irmãos e sua família, ele ascende ao poder e torna-se Rei da tribo dos vikings. Além de guerreiro implacável, Ragnar segue as tradições nórdicas e é devoto dos deuses. As lendas contam que ele descende diretamente de Odin, o deus da guerra.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'Y7d0A5re7-0',
    'tipo' => 'serie',
    'ano_lancamento' => '2013'
    ],

    [
    'titulo' => "Sewayaki Kitsune no Senko-san",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire3/6a43c186017d697574254db3b8c320791552089311_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'A história gira em torno de Nakano, que sempre passou os seus dias apenas indo e voltando de sua casa ao trabalho, em sua chamada “Black Company”, que explora seus empregados. Mas sua vida começa a mudar quando um espírito de raposa divina chamado Senko (800 anos, mas parece uma menina) o visita. Ela começa a cuidar dele, que sempre chega em casa completamente exausto, oferecendo refeições, limpeza e seu “serviço especial”.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'DUF5Ov7hmkM',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/faa002ac9675024246d94d4b8f4133561547263949_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Veio de boa família? Sim! Tem uma personalidade promissora? Sim! Todos os jovens de elite com futuros brilhantes acabam indo parar na Academia Shuchiin. E ambos os líderes do conselho estudantil, Kaguya Shinomiya e Miyuki Shirogane, estão apaixonados um pelo outro. Mas seis meses se passaram e nada aconteceu?! Ambos são orgulhosos demais para confessar seu amor. Esse orgulho só piorou com o tempo, e agora ambos estão brigando pra ver quem faz o outro se declarar primeiro!',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'rZ95aZmQu_8',
    'tipo' => 'anime',
    'ano_lancamento' => '2019'
    ],

    [
    'titulo' => "Tate no Yuusha no Nariagari",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/25627becf63b169d19af7efee6122e791555537428_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Iwatani Naofumi foi invocado num mundo paralelo junto com outras três pessoas para se tornarem os Heróis daquele mundo. Cada um dos heróis recebeu um equipamento lendário ao serem invocados e Naofumi recebeu o Escudo Lendário como arma. Devido à falta de carisma e experiência do Naofumi, ele é considerado o mais fraco e acaba traído, falsamente acusado e roubado no terceiro dia de sua aventura. Abandonado por todos, os pensamentos dele são preenchidos com nada além de ódio e desejo de vingança. Com isso, seu destino num mundo paralelo começa…',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'VKYmpq-V3Rs',
    'tipo' => 'anime',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Goblin Slayer",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire4/0b07451e9b20be6c024833a762a2e6a81538837010_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Uma jovem sacerdotisa forma seu primeiro bando de aventureiros, mas eles imediatamente se metem em apuros. É então que o Mata-Goblins vem a seu resgate – um homem que dedica sua vida a exterminar todos os goblins, custe o que custar. E quando seus feitos começam a se espalhar, ninguém sabe o que pode acontecer depois…',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'ZSgcb6bfk1Y',
    'tipo' => 'anime',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai",
    'nota' => 10,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire2/9f8894f961340ccdd9464a53b14ca3bd1538572740_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'Sindrome da puberdade – experiências anormais que dizem ser causadas pela sensitividade e instabilidade comuns na adolescência. Este ano, Sakuta Azusagawa, um estudante do segundo ano de um colégio perto de Enoshima, conheceu várias garotas que estão sofrendo dessa “síndrome da puberdade.” Como, por exemplo, uma garota-coelhinho que ele conheceu na biblioteca. Ela é Mai Sakurajima, uma atriz que deu uma pausa na carreira, e também sua veterana no colégio. Por algum motivo, ninguém mais consegue ver essa encantadora garota. Como será que ela ficou invisível?',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'ku7XxxXpIKI',
    'tipo' => 'anime',
    'ano_lancamento' => '2018'
    ],

    [
    'titulo' => "Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e",
    'nota' => 9,
    'imagem' => 'https://img1.ak.crunchyroll.com/i/spire3/3f44a6efc0ab35d49cfa1a9344f7f8841499831762_full.jpg',
    'wallpaper' => NULL,
    'sinopse' => 'A história se passa em uma escola de elite onde todos os alunos conseguem entrar na universidade e têm emprego garantido. Eles têm total liberdade para se vestirem ou alterarem a aparência, e ganham créditos, que servem de dinheiro, de acordo com o seu desempenho no colégio. Infelizmente, os estudantes da turma D do colégio não têm uma vida tão boa, existindo apenas para serem ridicularizados pelos estudantes das classes superiores. O protagonista, devido a um certo motivo, foi descuidado no exame de entrada e acabou indo parar na turma D. Lá ele conhece 2 alunas de comportamento curioso, que acabam mudando sua situação no colégio.',
    'created_at' => '2019-11-27 00:00:00',
    'updated_at' => '2019-11-27 00:00:00',
    'trailer' => 'iYsx6w5PNno',
    'tipo' => 'anime',
    'ano_lancamento' => '2017'
    ]
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('serie', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'title' => 'CONQUISTA HISTÓRICA... E HEROICA TAMBÉM!',
                'summary' => 'O Esportivo foi o campeão do interior após grande partida contra o Juventude.',
                'text' => '<p>O que esperar de um time que acabou de retornar para a primeira divisão do estadual?</p>


                <p>Várias coisas vêm à mente: dificuldades, brigar para não cair de novo, se retrancar para não sofrer com as duplas Gre-Nal e Ca-Ju...
                Mas, até para os torcedores mais otimistas, se classificar para uma semifinal de turno e ainda, de quebra, garantir o título do interior é algo que não se pensava.</p>
                
                <p>O fato é que, de forma especial - um ano após seu centenário, o Esportivo, com grande trabalho e entrega, conseguiu esse feito histórico e memorável, o qual não conquistava desde 1987.</p>
                
                
                <h2>NÃO FOI NADA FÁCIL</h2>
                
                
                <p>Além de estar retornando a elite nesse ano, o Tivo, como todos os clubes, também sofreu com a crise causada pela pandemia de COVID-19, passando por readequação de contratos de sua equipe. Mesmo assim, o Esportivo manteve seu grupo forte e alinhado com o objetivo maior, que com a decisão da Federação Gaúcha de Futebol de suspender o rebaixamento na temporada, passou a ser o título de interior.
                Essa conquista só foi possível pela regularidade do clube no campeonato, especialmente, em casa. No primeiro turno, o Tivo fez 8 pontos, foram 2 vitórias(as duas na Montanha, uma delas contra o Caxias - que viria a ser o campeão do turno), 2 empates e 1 derrota(Grêmio 5 x 0 na Arena, um jogo de exceção do que praticou o time de BG no resto do campeonato). Já no segundo turno, a campanha foi ainda melhor, foram 3 vitórias(2 na Montanha dos Vinhedos e uma no Alfredo Jaconi - tudo sem torcida), 2 empates(um deles contra o Inter) e uma derrota.</p>
                
                
                <h2>O JOGO DECISIVO:</h2>
                
                
                <p>No Alfredo Jaconi, Juventude e Esportivo se enfrentaram com chances de classificação. O Tivo, além de ganhar, tinha que secar o Caxias que jogava com Ypiranga, e o Juventude, além de vencer, teria que torcer para uma derrota do Noia contra o Grêmio. Quem começou com tudo, porém, foi o Tivo, inaugurando o placar no primeiro minuto com Gustavo Sapeka. No entanto, o Juventude correu atrás do prejuízo, aos 13 minutos, após escanteio, ocorreu um bate-rabate na defesa do Tivo e a bola sobrou para Breno empatar. Minutos depois ele ainda marcou na saída do goleiro Renan para virar o jogo.</p>
                
                
                <p>Foi na segunda etapa que o Esportivo fez história, na base da garra e inteligência técnica e emocional, o Tivo empatou aos 30 minutos, após lançamento de Renan que Rômulo desviou de cabeça para Flávio Torres sair na cara do gol e marcar. E menos de 5 minutos depois, Diogo fez belo cruzamento para área e o zagueiro Cleiton subiu mais que todo mundo para virar o jogo e, com o empate do Caxias, classificar o time de Bento Gonçalves para a semifinal do segundo turno do gauchão.</p>
                
                
                <p>Com esses três pontos, o Esportivo chegou a 19 na classificação geral, o que lhe confere o quarto lugar. Com isso, o Esportivo não só garante o título interiorano(caso não vença o segundo turno), mas também as vagas na Copa do Brasil e Série D de 2021, ou seja, asseguram um futuro promissor para um equipe que demonstrou mandar bem - melhor que o esperado - no planejamento.</p>
                
                
                Escrito por: Patrick Alessi.',
                'created_at' => '2020-12-04 19:29:33',
                'active' => 1
            ],
            [
                'category_id' => 2,
                'title' => 'GP de Sakhir: Russell volta a ser o mais rápido com a Mercedes, e Fittipaldi melhora desempenho',
                'summary' => 'Brasileiro completa mais da metade da distância de um grande prêmio, fica em 18º e termina a apenas 0s3 de companheiro mais experiente; na frente, substituto de Hamilton esmaga Bottas.',
                'text' => '<p>Uma sexta-feira perfeita para George Russell em Sakhir. Substituto do heptacampeão Lewis Hamilton, que está com Covid-19, o inglês de 22 anos foi de novo o mais rápido no segundo treino livre da penúltima etapa da temporada, no circuito barenita. Na sua melhor volta, Russell fez 54s713, 0s128 mais veloz do que o segundo colocado Max Verstappen, da RBR. O desempenho de George é ainda mais significativo se for levado em conta que o companheiro Valtteri Bottas foi apenas o 11º. No entanto, nos trechos mais longos, em simulação de corrida, o finlandês foi melhor.</p>

                <p>Correndo no lugar de Romain Grosjean, que sofreu grave acidente no último domingo, o brasileiro Pietro Fittipaldi teve mais uma sessão tranquila e ganhou quilometragem com o carro da Haas. Pietro melhorou seus tempos durante a sessão e, ao completar a prática em 18º, subiu uma posição em relação à primeira sessão. Além disso, foi novamente mais veloz do que o outro estreante do dia, Jack Aitken, que corre no lugar de George Russell na Williams.</p>
                
                <p>O mexicano Sergio Pérez voltou a ter bom desempenho com a Racing Point e terminou em terceiro, à frente de Esteban Ocon, que liderou brevemente a sessão com a Renault, e Alexander Albon, da RBR. Completaram os dez primeiros, da quinta à décima posições, Daniil Kvyat (AlphaTauri), Lance Stroll (Racing Point), Daniel Ricciardo (Renault), Pierre Gasly (AlphaTauri) e Carlos Sainz Jr. (McLaren).</p>',
                'created_at' => '2020-12-04 19:29:33',
                'active' => 1
            ]
        ]);
    }
}
<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pokemon</title>
      <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <section class="pokemonAnime">

      <!-- <div class="pokemon-list"> -->

        <?php 
            $id = 1;

            $artworks = glob('../images/artworks/pokemons/*');
            natsort($artworks);
            $sprites = glob('../images/assets/pokemons/*');
            natsort($sprites);

            for ($id = 1; $id<151; $id++)
            {
              echo $sprites[$id];
              echo '<div><h1>'. $id .'</h1><img src="'.$sprites[$id].'"><h2>test</h2></div>';
            }
        ?>

        <!-- GENERATION 1 -->
        <!-- <div><h1>001</h1><img src="../images/assets/pokemons/1.png"><h2>Bulbizarre</h2></div>
        <div><h1>002</h1><img src="../images/assets/pokemons/2.png"><h2>Herbizarre</h2></div>
        <div><h1>003</h1><img src="../images/assets/pokemons/3.png"><h2>Florizarre</h2></div>
        <div><h1>004</h1><img src="../images/assets/pokemons/4.png"><h2>Salamèche</h2></div>
        <div><h1>005</h1><img src="../images/assets/pokemons/5.png"><h2>Reptincel</h2></div>
        <div><h1>006</h1><img src="../images/assets/pokemons/6.png"><h2>Dracaufeu</h2></div>
        <div><h1>007</h1><img src="../images/assets/pokemons/7.png"><h2>Carapuce</h2></div>
        <div><h1>008</h1><img src="../images/assets/pokemons/8.png"><h2>Carabaffe</h2></div>
        <div><h1>009</h1><img src="../images/assets/pokemons/9.png"><h2>Tortank</h2></div>
        <div><h1>010</h1><img src="../images/assets/pokemons/10.png"><h2>Chenipan</h2></div>
        <div><h1>011</h1><img src="../images/assets/pokemons/11.png"><h2>Chrysacier</h2></div>
        <div><h1>012</h1><img src="../images/assets/pokemons/12.png"><h2>Papilusion</h2></div>
        <div><h1>013</h1><img src="../images/assets/pokemons/13.png"><h2>Aspicot</h2></div>
        <div><h1>014</h1><img src="../images/assets/pokemons/14.png"><h2>Coconfort</h2></div>
        <div><h1>015</h1><img src="../images/assets/pokemons/15.png"><h2>Dardargnan</h2></div>
        <div><h1>016</h1><img src="../images/assets/pokemons/16.png"><h2>Roucool</h2></div>
        <div><h1>017</h1><img src="../images/assets/pokemons/17.png"><h2>Roucoups</h2></div>
        <div><h1>018</h1><img src="../images/assets/pokemons/18.png"><h2>Roucarnage</h2></div>
        <div><h1>019</h1><img src="../images/assets/pokemons/19.png"><h2>Rattata</h2></div>
        <div><h1>020</h1><img src="../images/assets/pokemons/20.png"><h2>Rattatac</h2></div>
        <div><h1>021</h1><img src="../images/assets/pokemons/21.png"><h2>Piafabec</h2></div>
        <div><h1>022</h1><img src="../images/assets/pokemons/22.png"><h2>Rapasdepic</h2></div>
        <div><h1>023</h1><img src="../images/assets/pokemons/23.png"><h2>Abo</h2></div>
        <div><h1>024</h1><img src="./images/assets/pokemons/24.png"><h2>Arbok</h2></div>
        <div><h1>025</h1><img src="../images/assets/pokemons/25.png"><h2>Pikachu</h2></div>
        <div><h1>026</h1><img src="../images/assets/pokemons/26.png"><h2>Raichu</h2></div>
        <div><h1>027</h1><img src="../images/assets/pokemons/27.png"><h2>Sabelette</h2></div>
        <div><h1>028</h1><img src="../images/assets/pokemons/28.png"><h2>Sablaireau</h2></div>
        <div><h1>029</h1><img src="../images/assets/pokemons/29.png"><h2>Nidoran♀</h2></div>
        <div><h1>030</h1><img src="../images/assets/pokemons/30.png"><h2>Nidorina</h2></div>
        <div><h1>031</h1><img src="../images/assets/pokemons/31.png"><h2>Nidoqueen</h2></div>
        <div><h1>032</h1><img src="../images/assets/pokemons/32.png"><h2>Nidoran♂</h2></div>
        <div><h1>033</h1><img src="../images/assets/pokemons/33.png"><h2>Nidorino</h2></div>
        <div><h1>034</h1><img src="../images/assets/pokemons/34.png"><h2>Nidoking</h2></div>
        <div><h1>035</h1><img src="../images/assets/pokemons/35.png"><h2>Mélofée</h2></div>
        <div><h1>036</h1><img src="../images/assets/pokemons/36.png"><h2>Mélodelfe</h2></div>
        <div><h1>037</h1><img src="../images/assets/pokemons/37.png"><h2>Goupix</h2></div>
        <div><h1>038</h1><img src="../images/assets/pokemons/38.png"><h2>Feunard</h2></div>
        <div><h1>039</h1><img src="../images/assets/pokemons/39.png"><h2>Rondoudou</h2></div>
        <div><h1>040</h1><img src="../images/assets/pokemons/40.png"><h2>Grodoudou</h2></div>
        <div><h1>041</h1><img src="../images/assets/pokemons/41.png"><h2>Nosferapti</h2></div>
        <div><h1>042</h1><img src="../images/assets/pokemons/42.png"><h2>Nosferalto</h2></div>
        <div><h1>043</h1><img src="../images/assets/pokemons/43.png"><h2>Mystherbe</h2></div>
        <div><h1>044</h1><img src="../images/assets/pokemons/44.png"><h2>Ortide</h2></div>
        <div><h1>045</h1><img src="../images/assets/pokemons/45.png"><h2>Rafflesia</h2></div>
        <div><h1>046</h1><img src="../images/assets/pokemons/46.png"><h2>Paras</h2></div>
        <div><h1>047</h1><img src="../images/assets/pokemons/47.png"><h2>Parasect</h2></div>
        <div><h1>048</h1><img src="../images/assets/pokemons/48.png"><h2>Mimitoss</h2></div>
        <div><h1>049</h1><img src="../images/assets/pokemons/49.png"><h2>Aéromite</h2></div>
        <div><h1>050</h1><img src="../images/assets/pokemons/50.png"><h2>Taupiqueur</h2></div>
        <div><h1>051</h1><img src="../images/assets/pokemons/51.png"><h2>Triopikeur</h2></div>
        <div><h1>052</h1><img src="../images/assets/pokemons/52.png"><h2>Miaouss</h2></div>
        <div><h1>053</h1><img src="../images/assets/pokemons/53.png"><h2>Persian</h2></div>
        <div><h1>054</h1><img src="../images/assets/pokemons/54.png"><h2>Psykokwak</h2></div>
        <div><h1>055</h1><img src="../images/assets/pokemons/55.png"><h2>Akwakwak</h2></div>
        <div><h1>056</h1><img src="../images/assets/pokemons/56.png"><h2>Férosinge</h2></div>
        <div><h1>057</h1><img src="../images/assets/pokemons/57.png"><h2>Colossinge</h2></div>
        <div><h1>058</h1><img src="../images/assets/pokemons/58.png"><h2>Caninos</h2></div>
        <div><h1>059</h1><img src="../images/assets/pokemons/59.png"><h2>Arcanin</h2></div>
        <div><h1>060</h1><img src="../images/assets/pokemons/60.png"><h2>Ptitard</h2></div>
        <div><h1>061</h1><img src="../images/assets/pokemons/61.png"><h2>Têtarte</h2></div>
        <div><h1>062</h1><img src="../images/assets/pokemons/62.png"><h2>Tartard</h2></div>
        <div><h1>063</h1><img src="../images/assets/pokemons/63.png"><h2>Abra</h2></div>
        <div><h1>064</h1><img src="../images/assets/pokemons/64.png"><h2>Kadabra</h2></div>
        <div><h1>065</h1><img src="../images/assets/pokemons/65.png"><h2>Alakazam</h2></div>
        <div><h1>066</h1><img src="../images/assets/pokemons/66.png"><h2>Machoc</h2></div>
        <div><h1>067</h1><img src="../images/assets/pokemons/67.png"><h2>Machopeur</h2></div>
        <div><h1>068</h1><img src="../images/assets/pokemons/68.png"><h2>Mackogneur</h2></div>
        <div><h1>069</h1><img src="../images/assets/pokemons/69.png"><h2>Chétiflor</h2></div>
        <div><h1>070</h1><img src="../images/assets/pokemons/70.png"><h2>Boustiflor</h2></div>
        <div><h1>071</h1><img src="../images/assets/pokemons/71.png"><h2>Empiflor</h2></div>
        <div><h1>072</h1><img src="../images/assets/pokemons/72.png"><h2>Tentacool</h2></div>
        <div><h1>073</h1><img src="../images/assets/pokemons/73.png"><h2>Tentacruel</h2></div>
        <div><h1>074</h1><img src="../images/assets/pokemons/74.png"><h2>Racaillou</h2></div>
        <div><h1>075</h1><img src="../images/assets/pokemons/75.png"><h2>Gravalanch</h2></div>
        <div><h1>076</h1><img src="../images/assets/pokemons/76.png"><h2>Gravalancher</h2></div>
        <div><h1>077</h1><img src="../images/assets/pokemons/77.png"><h2>Ponyta</h2></div>
        <div><h1>078</h1><img src="../images/assets/pokemons/78.png"><h2>Galopa</h2></div>
        <div><h1>079</h1><img src="../images/assets/pokemons/79.png"><h2>Ramoloss</h2></div>
        <div><h1>080</h1><img src="../images/assets/pokemons/80.png"><h2>Flagadoss</h2></div>
        <div><h1>081</h1><img src="../images/assets/pokemons/81.png"><h2>Magnéti</h2></div>
        <div><h1>082</h1><img src="../images/assets/pokemons/82.png"><h2>Magnéton</h2></div>
        <div><h1>083</h1><img src="../images/assets/pokemons/83.png"><h2>Canarticho</h2></div>
        <div><h1>084</h1><img src="../images/assets/pokemons/84.png"><h2>Doduo</h2></div>
        <div><h1>085</h1><img src="../images/assets/pokemons/85.png"><h2>Dodrio</h2></div>
        <div><h1>086</h1><img src="../images/assets/pokemons/86.png"><h2>Otaria</h2></div>
        <div><h1>087</h1><img src="../images/assets/pokemons/87.png"><h2>Lamantine</h2></div>
        <div><h1>088</h1><img src="../images/assets/pokemons/88.png"><h2>Tadmorv</h2></div>
        <div><h1>089</h1><img src="../images/assets/pokemons/89.png"><h2>Grotadmorv</h2></div>
        <div><h1>090</h1><img src="../images/assets/pokemons/90.png"><h2>Kokiyas</h2></div>
        <div><h1>091</h1><img src="../images/assets/pokemons/91.png"><h2>Crustabri</h2></div>
        <div><h1>092</h1><img src="../images/assets/pokemons/92.png"><h2>Fantominus</h2></div>
        <div><h1>093</h1><img src="../images/assets/pokemons/93.png"><h2>Spectrum</h2></div>
        <div><h1>094</h1><img src="../images/assets/pokemons/94.png"><h2>Ectoplasma</h2></div>
        <div><h1>095</h1><img src="../images/assets/pokemons/95.png"><h2>Onix</h2></div>
        <div><h1>096</h1><img src="../images/assets/pokemons/96.png"><h2>Soporifik</h2></div>
        <div><h1>097</h1><img src="../images/assets/pokemons/97.png"><h2>Hypnomade</h2></div>
        <div><h1>098</h1><img src="../images/assets/pokemons/98.png"><h2>Krabby</h2></div>
        <div><h1>099</h1><img src="../images/assets/pokemons/99.png"><h2>Kingler</h2></div>
        <div><h1>100</h1><img src="../images/assets/pokemons/100.png"><h2>Voltorbe</h2></div>
        <div><h1>101</h1><img src="../images/assets/pokemons/101.png"><h2>Électrode</h2></div>
        <div><h1>102</h1><img src="../images/assets/pokemons/102.png"><h2>Noeunoeuf</h2></div>
        <div><h1>103</h1><img src="../images/assets/pokemons/103.png"><h2>Noadkoko</h2></div>
        <div><h1>104</h1><img src="../images/assets/pokemons/104.png"><h2>Osselait</h2></div>
        <div><h1>105</h1><img src="../images/assets/pokemons/105.png"><h2>Ossatueur</h2></div>
        <div><h1>106</h1><img src="../images/assets/pokemons/106.png"><h2>Kicklee</h2></div>
        <div><h1>107</h1><img src="../images/assets/pokemons/107.png"><h2>Tygnon</h2></div>
        <div><h1>108</h1><img src="../images/assets/pokemons/108.png"><h2>Excelangue</h2></div>
        <div><h1>109</h1><img src="../images/assets/pokemons/109.png"><h2>Smogo</h2></div>
        <div><h1>110</h1><img src="../images/assets/pokemons/110.png"><h2>Smogogo</h2></div>
        <div><h1>111</h1><img src="../images/assets/pokemons/111.png"><h2>Rhinocorne</h2></div>
        <div><h1>112</h1><img src="../images/assets/pokemons/112.png"><h2>Rhinoféros</h2></div>
        <div><h1>113</h1><img src="../images/assets/pokemons/113.png"><h2>Leveinard</h2></div>
        <div><h1>114</h1><img src="../images/assets/pokemons/114.png"><h2> Saquedeneu</h2></div>
        <div><h1>115</h1><img src="../images/assets/pokemons/115.png"><h2>Kangourex</h2></div>
        <div><h1>116</h1><img src="../images/assets/pokemons/116.png"><h2>Hypotrempe</h2></div>
        <div><h1>117</h1><img src="../images/assets/pokemons/117.png"><h2>Hypocéan</h2></div>
        <div><h1>118</h1><img src="../images/assets/pokemons/118.png"><h2>Poissirène</h2></div>
        <div><h1>119</h1><img src="../images/assets/pokemons/119.png"><h2>Poissoroy</h2></div>
        <div><h1>120</h1><img src="../images/assets/pokemons/120.png"><h2>Stari</h2></div>
        <div><h1>121</h1><img src="../images/assets/pokemons/121.png"><h2>Staross</h2></div>
        <div><h1>122</h1><img src="../images/assets/pokemons/122.png"><h2>Mr. Mime</h2></div>
        <div><h1>123</h1><img src="../images/assets/pokemons/123.png"><h2>Insécateur</h2></div>
        <div><h1>124</h1><img src="../images/assets/pokemons/124.png"><h2>Lippoutou</h2></div>
        <div><h1>125</h1><img src="../images/assets/pokemons/125.png"><h2>Élektek</h2></div>
        <div><h1>126</h1><img src="../images/assets/pokemons/126.png"><h2>Magmar</h2></div>
        <div><h1>127</h1><img src="../images/assets/pokemons/127.png"><h2>Scarabrute</h2></div>
        <div><h1>128</h1><img src="../images/assets/pokemons/128.png"><h2>Tauros</h2></div>
        <div><h1>129</h1><img src="../images/assets/pokemons/129.png"><h2> Magicarpe</h2></div>
        <div><h1>130</h1><img src="../images/assets/pokemons/130.png"><h2>Léviator</h2></div>
        <div><h1>131</h1><img src="../images/assets/pokemons/131.png"><h2>Lokhlass</h2></div>
        <div><h1>132</h1><img src="../images/assets/pokemons/132.png"><h2>Métamorph</h2></div>
        <div><h1>133</h1><img src="../images/assets/pokemons/133.png"><h2>Évoli</h2></div>
        <div><h1>134</h1><img src="../images/assets/pokemons/134.png"><h2>Aquali</h2></div>
        <div><h1>135</h1><img src="../images/assets/pokemons/135.png"><h2>Voltali</h2></div>
        <div><h1>136</h1><img src="../images/assets/pokemons/136.png"><h2>Pyroli</h2></div>
        <div><h1>137</h1><img src="../images/assets/pokemons/137.png"><h2>Porygon</h2></div>
        <div><h1>138</h1><img src="../images/assets/pokemons/138.png"><h2>Amonita</h2></div>
        <div><h1>139</h1><img src="../images/assets/pokemons/139.png"><h2>Amonistar</h2></div>
        <div><h1>140</h1><img src="../images/assets/pokemons/140.png"><h2>Kabuto</h2></div>
        <div><h1>141</h1><img src="../images/assets/pokemons/141.png"><h2>Kabutops</h2></div>
        <div><h1>142</h1><img src="../images/assets/pokemons/142.png"><h2>Ptera</h2></div>
        <div><h1>143</h1><img src="../images/assets/pokemons/143.png"><h2>Ronflex</h2></div>
        <div><h1>144</h1><img src="../images/assets/pokemons/144.png"><h2>Artikodin</h2></div>
        <div><h1>145</h1><img src="../images/assets/pokemons/145.png"><h2>Électhor</h2></div>
        <div><h1>146</h1><img src="../images/assets/pokemons/146.png"><h2>Sulfura</h2></div>
        <div><h1>147</h1><img src="../images/assets/pokemons/147.png"><h2>Minidraco</h2></div>
        <div><h1>148</h1><img src="../images/assets/pokemons/148.png"><h2>Draco</h2></div>
        <div><h1>149</h1><img src="../images/assets/pokemons/149.png"><h2>Dracolosse</h2></div>
        <div><h1>150</h1><img src="../images/assets/pokemons/150.png"><h2>Mewtwo</h2></div>
        <div><h1>151</h1><img src="../images/assets/pokemons/151.png"><h2>Mew</h2></div> -->

        <!-- GENERATION 2 -->
    </section>
  </body>
</html>
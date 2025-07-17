
<section class="bg-white py-16 sm:py-24" id="menu">
    <div class="max-w-screen-xl mx-auto px-4">

        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-[#4a2c2a]" style="font-family: 'Nunito', sans-serif;">
                Un menú para <span class="text-[#fca8c2]" style="font-family: 'Pacifico', cursive;">ronronear</span>
            </h2>
            <p class="text-lg text-gray-500 mt-2">Explora nuestras delicias, hechas con pasión por los michis y el café.</p>
        </div>

        <div x-data="{ mainTab: 'alimentos', foodTab: 'entradas', drinkTab: 'calientes' }">

            <div class="flex justify-center space-x-2 md:space-x-4 p-2 bg-gray-100 rounded-full max-w-sm mx-auto">
                <button @click="mainTab = 'alimentos'; foodTab = 'entradas'" :class="{'bg-[#fca8c2] text-white shadow-md': mainTab === 'alimentos', 'text-gray-600': mainTab !== 'alimentos'}" class="w-full text-center font-semibold py-2 px-4 rounded-full transition-colors duration-300">Alimentos</button>
                <button @click="mainTab = 'bebidas'; drinkTab = 'calientes'" :class="{'bg-[#fca8c2] text-white shadow-md': mainTab === 'bebidas', 'text-gray-600': mainTab !== 'bebidas'}" class="w-full text-center font-semibold py-2 px-4 rounded-full transition-colors duration-300">Bebidas</button>
            </div>

            <div x-show="mainTab === 'alimentos'" x-transition:enter.duration.300ms x-transition:leave.duration.200ms class="flex flex-wrap justify-center gap-2 md:gap-4 mt-8">
                <x-menu.subcategory-tab tab="entradas" current-tab="foodTab" label="Entradas" />
                <x-menu.subcategory-tab tab="pastas" current-tab="foodTab" label="Pastas" />
                <x-menu.subcategory-tab tab="ensaladas" current-tab="foodTab" label="Ensaladas" />
                <x-menu.subcategory-tab tab="anvorguesas" current-tab="foodTab" label="Anvorguesas" />
                <x-menu.subcategory-tab tab="bagels" current-tab="foodTab" label="Bagels" />
                <x-menu.subcategory-tab tab="postres" current-tab="foodTab" label="Postres" />
                <x-menu.subcategory-tab tab="desayunos" current-tab="foodTab" label="Desayunos" />
            </div>

            <div x-show="mainTab === 'bebidas'" x-transition:enter.duration.300ms x-transition:leave.duration.200ms class="flex flex-wrap justify-center gap-2 md:gap-4 mt-8">
                <x-menu.subcategory-tab tab="calientes" current-tab="drinkTab" label="Calientes" />
                <x-menu.subcategory-tab tab="frias" current-tab="drinkTab" label="Frías" />
                <x-menu.subcategory-tab tab="frappes" current-tab="drinkTab" label="Frappés" />
                <x-menu.subcategory-tab tab="refrescantes" current-tab="drinkTab" label="Refrescantes" />
                <x-menu.subcategory-tab tab="alcoholicas" current-tab="drinkTab" label="Bebidas Alcohólicas" />
            </div>

            <div class="mt-12 max-w-4xl mx-auto">
                <div x-show="mainTab === 'alimentos'">
                    <div x-show="foodTab === 'entradas'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="SHERE KAN" price="80">Papas gajo ó a la francesa.</x-menu.item>
                        <x-menu.item name="PENÉLOPE (Tabla de quesos)" price="225">Brie, feta, gouda (50gr c/u) y carnes frías ¡Para chuparse los bigotes!</x-menu.item>
                        <x-menu.item name="GATO JAZZ (Papas Supremas)" price="140">A la francesa con guacamole, pico de gallo, queso amarillo y arrachera.</x-menu.item>
                        <x-menu.item name="PINK PANTHER" price="139">Tostas de salmón con queso crema y arúgula (2pzas).</x-menu.item>
                        <x-menu.item name="DIEGO (Boneless)" price="120" :is-star="true">Crujientes bocaditos de pollo con aderezo de la casa (10pzas).</x-menu.item>
                        <x-menu.item name="KOVU" price="73">Crepa salada de jamón de pavo con queso gouda ó philadelphia.</x-menu.item>
                    </div>
                    <div x-show="foodTab === 'pastas'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="DON GATO (Fusilli)" price="80">Con una rica salsa blanca y tocino.</x-menu.item>
                        <x-menu.item name="DEMÓSTENES (Linguini)" price="84">Un bloody mary hecho pasta (puré de tomate, salsas negras y vodka).</x-menu.item>
                        <x-menu.item name="GARFIELD" price="102" :is-star="true">Una clásica lasagna para un gatito muy clásico.</x-menu.item>
                    </div>
                    <div x-show="foodTab === 'ensaladas'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="SPOOK" price="77">Con queso feta, cherrys y aceituna negra.</x-menu.item>
                        <x-menu.item name="GATO CON BOTAS" price="89">Para los no tan cazadores, de pollito y parmesano.</x-menu.item>
                        <x-menu.item name="RATATOUILLE" price="80">¡Siempre debe de haber una presa!</x-menu.item>
                        <x-menu.item name="FANCY FANCY" price="99">Jamón serrano y pera, Una purrrfecta combinación de dulce y salado.</x-menu.item>
                    </div>
                    <div x-show="foodTab === 'anvorguesas'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="FIGARO" price="134">Champiñones, jamón de pavo, gouda, lechuga y jitomate.</x-menu.item>
                        <x-menu.item name="KITTY" price="155">Queso brie, arúgula y cebollas en reducción de vino tinto.</x-menu.item>
                        <x-menu.item name="CUCHO" price="124">Una clásica pero con pollo crunchy y aderezo ranch.</x-menu.item>
                        <x-menu.item name="BENITO BODOQUE (VEGGIE)" price="105">Si no te gusta la carne, esta es tu mejor opción con hongos picantes, pimiento y espinaca.</x-menu.item>
                        <x-menu.item name="SILVESTRE" price="149">La favorita de la casa, con aros de cebolla, tocino y BBQ.</x-menu.item>
                    </div>
                    <div x-show="foodTab === 'bagels'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="SALEM" price="157">¡Hicimos magia! Con jamón serrano, arúgula y cebolla en reducción de vino tinto.</x-menu.item>
                        <x-menu.item name="BOLA DE NIEVE II (VEGGIE)" price="107">Hongos picantes, pimiento, queso crema y germen de alfalfa.</x-menu.item>
                        <x-menu.item name="FELIX" price="129">No podía faltar el favorito de los michis, con jamón de pavo y 3 quesos.</x-menu.item>
                        <x-menu.item name="THOMAS O'MALLEY" price="160">De salmón con queso crema, arúgula y aguacate.</x-menu.item>
                        <x-menu.item name="LUCIFER" price="169" :is-star="true">Como salido de un cuento, con arrachera, pimientos, gouda y germen de alfalfa.</x-menu.item>
                    </div>
                    <div x-show="foodTab === 'postres'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="TOULOUSE" price="76">Rico bagel con nutella, fresa y uva.</x-menu.item>
                        <x-menu.item name="NALA" price="55">Tartaleta individual de crema pastelera y frutas.</x-menu.item>
                        <x-menu.item name="MARIE" price="72">Mousse de chocolate blanco (turin), fresa y ralladura de limón.</x-menu.item>
                        <x-menu.item name="SCAR" price="75">Delicioso tiramisú clásico con queso mascarpone y espresso.</x-menu.item>
                        <x-menu.item name="BAGHEERA" price="70">Casi todo traído de la selva, postre tipo mousse de cacao con crema batida.</x-menu.item>
                        <x-menu.item name="KIARA (Crepa Dulce)" price="65">2 ingredientes a elegir: Nutella, Mermelada de fresa, Queso Crema, Crema de Cacahuate.</x-menu.item>
                    </div>
                     <div x-show="foodTab === 'desayunos'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="DUQUESITA" price="94">De la realeza hasta tu mesa, pan francés como nunca lo haz probado (3pzas).</x-menu.item>
                        <x-menu.item name="BAGEL BERLIOZ" price="112">De huevito revuelto con tocino crujiente.</x-menu.item>
                        <x-menu.item name="LOLA GLAMOUR" price="121">Un croque madame con nuestro delicioso pan casero, salsa madre, queso y huevo estrellado.</x-menu.item>
                        <x-menu.item name="BOWL CON FRUTA" price="55">Yogurt natural, granola, fruta y un toque fresco de catnip (menta).</x-menu.item>
                        <x-menu.item name="HUEVOS AL GUSTO" price="80">A la mexicana, con jamón de pavo, naturales ó estrellados con tocino crujiente.</x-menu.item>
                        <x-menu.item name="CHILAQUILES NATURALES" price="102">Salsa verde, roja ó frijol, con queso panela, crema, aguacate y cebolla morada.</x-menu.item>
                    </div>
                </div>
                
                <div x-show="mainTab === 'bebidas'">
                    <div x-show="drinkTab === 'calientes'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="Espresso sencillo (1oz)" price="30">Un shot concentrado de nuestro café de especialidad.</x-menu.item>
                        <x-menu.item name="Espresso doble (2oz)" price="40">Doble shot de café para un impulso de energía.</x-menu.item>
                        <x-menu.item name="Espresso cortado (2oz)" price="44">Nuestro espresso "cortado" con una pequeña cantidad de leche.</x-menu.item>
                        <x-menu.item name="Americano" price="54">Café espresso de la casa diluido con agua caliente.</x-menu.item>
                        <x-menu.item name="Catpuccino" price="57">El clásico y espumoso cappuccino preparado por nuestras garritas.</x-menu.item>
                        <x-menu.item name="Latte" price="57">Bebida cremosa preparada con espresso y leche vaporizada.</x-menu.item>
                        <x-menu.item name="Chocolate" price="62">Nuestro delicioso chocolate caliente, perfecto para cualquier momento.</x-menu.item>
                        <x-menu.item name="Moka" price="62">La combinación perfecta de chocolate de casa y café espresso.</x-menu.item>
                        <x-menu.item name="Matcha, Chai ó Taro" price="62">Tu elección de bebida caliente, especiada y reconfortante.</x-menu.item>
                        <x-menu.item name="Dirty Chai" price="67">Un delicioso té chai especiado con un shot de espresso.</x-menu.item>
                        <x-menu.item name="Golden Milk" price="65">Bebida saludable y reconfortante a base de cúrcuma y especias.</x-menu.item>
                        <x-menu.item name="Catpuccino con Baileys ó licor 43 (1.5oz)" price="97">Nuestro famoso Catpuccino con un toque de tu licor favorito.</x-menu.item>
                    </div>
                    <div x-show="drinkTab === 'frias'">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                            <x-menu.item name="Americano" price="59">Refrescante café espresso de la casa servido con agua y hielo.</x-menu.item>
                            <x-menu.item name="Espresso Tonic" price="49">Una combinación burbujeante y refrescante de espresso y agua tónica.</x-menu.item>
                            <x-menu.item name="Moka" price="78">La versión fría de nuestra deliciosa mezcla de chocolate y espresso.</x-menu.item>
                            <x-menu.item name="Catpuccino" price="78">Nuestro cremoso cappuccino servido con hielo para refrescarte.</x-menu.item>
                            <x-menu.item name="Matcha" price="78">Refrescante y energizante té matcha preparado en frío.</x-menu.item>
                            <x-menu.item name="Chai" price="78">Té chai especiado y dulce, servido con leche fría y hielo.</x-menu.item>
                            <x-menu.item name="Chocolate" price="78">Chocolate de casa, cremoso y servido bien frío.</x-menu.item>
                            <x-menu.item name="Taro" price="78">Bebida fría con el sabor dulce y único del taro.</x-menu.item>
                            <x-menu.item name="Dirty Chai" price="84">Nuestro chai helado con un shot de espresso para un extra impulso.</x-menu.item>
                            <x-menu.item name="Golden Milk" price="81">Versión fría y refrescante de nuestra bebida de cúrcuma y especias.</x-menu.item>
                            <x-menu.item name="Catpuccino con Baileys" price="103">El toque cremoso de Baileys en nuestro delicioso cappuccino frío.</x-menu.item>
                            <x-menu.item name="Chocolate con Licor 43" price="103">Nuestro chocolate frío con las notas dulces de Licor 43.</x-menu.item>
                        </div>
                    </div>
                    <div x-show="drinkTab === 'frappes'">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                            <x-menu.item name="Frappuccino" price="88">El clásico frappé de café, la mejor opción para el calor.</x-menu.item>
                            <x-menu.item name="Mazapán" price="88">Dulce y cremoso frappé con el inconfundible sabor a mazapán.</x-menu.item>
                            <x-menu.item name="Moka" price="88">Frappé que mezcla a la perfección el sabor del chocolate y el café.</x-menu.item>
                            <x-menu.item name="Oreo" price="88">Delicioso y divertido frappé hecho con tus galletas favoritas.</x-menu.item>
                            <x-menu.item name="Fresa" price="88">Refrescante y dulce frappé preparado con fresas naturales.</x-menu.item>
                            <x-menu.item name="Matcha" price="88">Frappé con el sabor único y energizante del té matcha.</x-menu.item>
                            <x-menu.item name="Chai" price="88">Frappé cremoso y especiado con el delicioso sabor del té chai.</x-menu.item>
                            <x-menu.item name="Taro" price="88">Un exótico y dulce frappé con el sabor característico del taro.</x-menu.item>
                            <x-menu.item name="Dirty Chai" price="94">Nuestra mezcla de chai frappé con un shot de espresso.</x-menu.item>
                            <x-menu.item name="Golden Milk" price="91">La versión más refrescante y saludable de la leche dorada.</x-menu.item>
                            <x-menu.item name="Baileys (1.5oz)" price="112">Tu frappé favorito con un toque cremoso de licor de crema irlandesa.</x-menu.item>
                        </div>
                    </div>
                     <div x-show="drinkTab === 'refrescantes'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="Agua de la casa (Del día)" price="38 / $70">Pregunta por nuestra deliciosa y fresca agua del día. 250ml / 500ml.</x-menu.item>
                        <x-menu.item name="Limonada ó Naranjada" price="38 / $70">Refrescante y clásica, pídela natural, mineral o rusa. 250ml / 500ml.</x-menu.item>
                        <x-menu.item name="Refrescos de lata (355ml)" price="40">Disfruta de nuestra selección de refrescos clásicos.</x-menu.item>
                        <x-menu.item name="Agua embotellada (500ml)" price="15">Agua purificada embotellada para mantenerte hidratado.</x-menu.item>
                        <x-menu.item name="Agua mineral (355ml)" price="29">Agua mineral embotellada con un toque burbujeante.</x-menu.item>
                        <x-menu.item name="Agua Tónica (296ml)" price="40">El mezclador perfecto para un gin o para disfrutar sola.</x-menu.item>
                        <x-menu.item name="Jarra de Limonada o Naranjada" price="128">Para compartir, pídelas natural o mineral.</x-menu.item>
                        <x-menu.item name="Jarra Agua de la Casa" price="128">Pregunta por el sabor del día y comparte.</x-menu.item>
                    </div>
                     <div x-show="drinkTab === 'alcoholicas'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="CLERICOT" price="64 / $200">Manzana, pera y fresa, vino tinto, refresco de manzana. Individual / Jarra.</x-menu.item>
                        <x-menu.item name="CARAJILLO" price="115">Espresso + licor 43 (1.5oz).</x-menu.item>
                        <x-menu.item name="NIÑO DE ORO" price="103">Licor 43 + carnation (1.5oz).</x-menu.item>
                        <x-menu.item name="BLANCO 43" price="95">Leche + licor 43 de horchata (1.5oz).</x-menu.item>
                        <x-menu.item name="APEROL SPRITZ" price="103">Aperol (2oz) + prosecco (3oz) + agua mineral + naranja.</x-menu.item>
                        <x-menu.item name="NEGRONI" price="125">Ginebra brokers (1oz) + campari (1oz) y vermouth rosso (1oz).</x-menu.item>
                        <x-menu.item name="GIN & TONIC" price="93">Ginebra brokers (2oz) + agua tónica y twist de limón.</x-menu.item>
                        <x-menu.item name="GIN & APEROL" price="97">Ginebra brokers (2oz) + aperol (1oz) y jugo de arandano.</x-menu.item>
                        <x-menu.item name="GIN FRUTOS ROJOS" price="99">Ginebra brokers (2oz) + agua tónica y frutos rojos.</x-menu.item>
                        <x-menu.item name="DAIQUIRÍ" price="83">Elige: Limón, Fresa, o Durazno en almíbar.</x-menu.item>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

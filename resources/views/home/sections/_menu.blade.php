
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
                </div>
                
                <div x-show="mainTab === 'bebidas'">
                    <div x-show="drinkTab === 'calientes'" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <x-menu.item name="Espresso sencillo (1oz)" price="30"></x-menu.item>
                        <x-menu.item name="Espresso doble (2oz)" price="40"></x-menu.item>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

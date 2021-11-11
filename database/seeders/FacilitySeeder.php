<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sportCentre = "Zámeček nabízí široké veřejnosti svá sportoviště, mezi která patří sportovní haly, tělocvičny, kurty a střelnice. Mimo toho je zde pro Vás připraveno zázemí se saunou, vířivka a posilovna.\n
Těšit se můžete na lekce lukostřelby, volejbalu, florbalu, tenisu, badmintonu a dalších sportů. Dále také na pravidelně pořádané turnaje. Pokud pro daný sport nemáte potřebné vybavení, nezoufejte. Nabízíme možnost zapůjčení veškerého vybavení pro celou řadu sportovních aktivit.\n
Pakliže tedy máte chuť na trochu soupeření ať už s přáteli, rodinou či ostatními návštěvníky našeho sportoviště, neváhejte nás navštívit. Nudit se nebudete ani jako diváci u jednoho z mnoha pořádaných turajů. Rozhodně se máte na co těšit!";

        $accommodation = "Pokud se rozhodnete strávit noc nebo hned několik nocí v Zámečku, budete se cítit jako právoplatní členové zámecké rodiny. K dispozici máme hned několik pokojů pro 2, 4 a 6 osob. Každý pokoj je vybaven jednou až dvěma manželskými postelemi, v případě vícemístného pokoje dalšími oddělenými postelemi a samozřejmostí je také možnost zapůjčení dětských postýlek pro nejmenší návštěvníky našeho Zámečku. Každý pokoj obsahuje vlastní sociální zařízení. V každé koupelně je k dispozici sprchový kout a toaleta, v nadstandartních pokojích se můžete těšit také na prostorné vany nebo balkón s výhledem k do našich zahrad. Pokoje mají také menší obývací kouty s křesly a konferenčním stolkem, které jsou přímo dělané pro vypití kvalitní kávy nebo vychutnání zákusku z naší kuchyně.";

        $relax = "Pokud si chcete zpříjemnit svůj pobyt, zrelaxovat po celovečerním koncertu nebo využít oddychového času po svatební noci, není nic jednoduššího než využít wellness služeb našeho Zámečku. V nabídce máme kromě tradičních relaxačních masáží k dispozici také vířivku s teplou vodou pro 12 osob nebo finskou saunu taktéž až pro 12 osob. Myslíme však i na ty z vás, kteří rádi tráví svůj volný čas nad knihou. Pro vás máme speciálně vybudovanou knihovnu s několika pohodlnými gauči a spoustou knih od tradiční poezie, přes oblíbené romány až po nejnovější bestsellery! Samozřejmostí je možnost vypůjčení si knihy na pokoj, popřípadě do čajovny, kde vám naše kolegyně a kolegové rádi připraví některý z našich sypaných čajů té nejvyšší kvality a jako bonus můžeme nabídnout také vodní dýmku, ať již s klasickým tabákem tak jak jej znáte, nebo s ochucenými minerálními kamínky bez nikotinu.";

        $concerts = "Zámeček umožňuje pronajímat prostory pro různé typy událostí, jako jsou koncerty, divadelní představení, módní přehlídky a jiné další kulturní akce. Celková kapacita místnosti je 500 míst k sezení nebo 800 osob ke stání. Samotný sál má plochou okolo 550 m2 a hledištěm má rozlohu 50 m2. Sál je vybaven dataprojektorem s velkým promítacím plátnem, automatickou oponou, osvětlením a zvukovou aparaturou. Foyer sálu je vybaveno šatnami a toaletami s bezbariérovým přístupem.";

        $wedding = "Naše webová stránka Zámeček nabízí pronájem prostoru pro konání svatby spolu se svatební hostinou a taneční zábavou. Celková plocha místnosti je 150 m2 s kapacitou do 120 míst k sezení. Velikost prostoru nabízí plochu k tanci novomanželů i svatebních hostů a stále zbývá dost místa k uspořádání stolů dle svých představ. Pronajímaný prostor je vybaven toaletou, šatnou a kuchyní pro catering. V ceně pronájmu je zahrnuto osvětlení celého parketu i zvuková aparatura.";

        $facilities = [
            ['id' => 1, 'name' => 'Koncertní a divadelní sály', 'description' => $concerts],
            ['id' => 2, 'name' => 'Relaxace', 'description' => $relax],
            ['id' => 3, 'name' => 'Sportoviště a volný čas', 'description' => $sportCentre],
            ['id' => 4, 'name' => 'Svatba', 'description' => $wedding],
            ['id' => 5, 'name' => 'Ubytování', 'description' => $accommodation]
        ];

        DB::table('facility')->insert($facilities);
    }
}

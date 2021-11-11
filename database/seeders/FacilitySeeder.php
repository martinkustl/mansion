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
        $dummyDesc = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Pellentesque ipsum. Nam sed tellus id magna elementum tincidunt. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Aliquam ornare wisi eu metus. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean vel massa quis mauris vehicula lacinia. Integer in sapien. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque ipsum. Morbi scelerisque luctus velit. Donec iaculis gravida nulla. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Aliquam erat volutpat. In sem justo, commodo ut, suscipit at, pharetra vitae, orci.";
        $dummyDec2 = "
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam rhoncus aliquam metus. Proin mattis lacinia justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam ornare wisi eu metus. Nullam dapibus fermentum ipsum. Cras elementum. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Mauris metus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Integer pellentesque quam vel velit. Mauris tincidunt sem sed arcu. Etiam neque. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Maecenas sollicitudin. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas sollicitudin. Suspendisse nisl. \n

        Fusce wisi. Et harum quidem rerum facilis est et expedita distinctio. Nulla non arcu lacinia neque faucibus fringilla. Et harum quidem rerum facilis est et expedita distinctio. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Mauris dictum facilisis augue. Nam sed tellus id magna elementum tincidunt. Nunc dapibus tortor vel mi dapibus sollicitudin. Nullam faucibus mi quis velit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nunc tincidunt ante vitae massa. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Praesent id justo in neque elementum ultrices. Aliquam in lorem sit amet leo accumsan lacinia. Nullam dapibus fermentum ipsum. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Curabitur bibendum justo non orci. \n

        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Fusce consectetuer risus a nunc. Nullam sit amet magna in magna gravida vehicula. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Vivamus luctus egestas leo. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Integer pellentesque quam vel velit. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Et harum quidem rerum facilis est et expedita distinctio. Maecenas aliquet accumsan leo.";


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

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
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


        $realEventKafkaDesc = "Přijďte se podívat na novou inscenaci Kafkova románu Zámek, který je označován za nejtajemnější a nejkrásnější ze všech Kafkových větších děl. \n
                            Stejně jako Kafkovy předchozí romány Nezvěstný a Proces zůstal i tento román nedokončený. Právě tato otevřenost, stejně jako absurdní grotesknost tohoto základního díla moderní světové literatury neustále láká čtenáře i divadelníky k novým interpretacím.\n
                            Délka představení: 140 minut
                            ";
        $realEventSilvesterPartyDesc = "I tento rok pořádáme rozlučku se starým rokem a přivítání toho nového. Kromě nového roku se u nás můžete těšit i na luxusní občerstvení, dobře zásobený bar a doprovodný program: \n
                            19:00-01:00 živá hudba \n
                            19:00-21:00 silvestrovská večeře (poté raut) \n
                            22:00-22:30 fire show \n
                            21:00-23:30 silvestrovský animační program pro děti \n
                            20:00-24:00 fotokoutek \n
                            Oslavy vyvrcholí pečlivě připraveným půlhodinovým ohňostrojem.
                            ";
        $realEventChristmasPartyDesc = "Pro samotné ženy vstup zdarma! Pro nezasvěcené může pojem swingers párty možná být synonymem nějakých nezřízených orgií, ale každý, kdo se podobné akce zúčastnil, potvrdí, že jde v první řadě o skvělý zážitek. \n
                                    Vykašlete se na nudný partnerský vztah a nadělte si jeho oživení účastí na naší vánoční swingers párty. Přiveďte partnera/partnerku a naklepejte společně řízky třeba jinému páru. Tady se na nevěru nehraje!
                                    ";
        $realEventConcert = "Legendární německá kapela, kterou není potřeba více představovat, zavítá do České republiky v rámci svého turné v roce 2023.\n
Vannstein patří mezi nejinovativnější koncertní kapely současnosti. Proslulí jsou velkou divadelní show plnou ohňostrojů, ohňů, dělobuchů a světel. Plánují propagovat svou nově vydanou desku Härte, která sklidila velký ohlas. Rozhodně se je na co těšit.";

        $events = [
            ['id' => 1, 'title' => "Název párty", 'date' => date('Y-m-d H:i:s', strtotime('2021-09-22 19:00:00 GMT+2',)), 'description' => $dummyDesc, "entrance_fee" => 250, "event_type_id" => 1],
            ['id' => 2, 'title' => "Název koncertu", 'date' => date('Y-m-d H:i:s', strtotime('2023-07-22 17:00:00 GMT+2',)), 'description' => $dummyDec2, "entrance_fee" => 100, "event_type_id" => 2],
            ['id' => 3, 'title' => "Název párty", 'date' => date('Y-m-d H:i:s', strtotime('2024-12-22 19:00:00 GMT+1',)), 'description' => $dummyDesc, "entrance_fee" => 200, "event_type_id" => 1],
            ['id' => 4, 'title' => "Název párty", 'date' => date('Y-m-d H:i:s', strtotime('2023-11-05 19:00:00 GMT+1',)), 'description' => $dummyDesc, "entrance_fee" => 130, "event_type_id" => 1],
            ['id' => 5, 'title' => "Název divadelní hry", 'date' => date('Y-m-d H:i:s', strtotime('2021-02-22 19:00:00 GMT+2',)), 'description' => $dummyDec2, "entrance_fee" => 100, "event_type_id" => 3],
            ['id' => 6, 'title' => 'Zámek (F. Kafka)', 'date' => date('Y-m-d H:i:s', strtotime('2021-08-14 18:00:00 GMT+2')), 'description' => $realEventKafkaDesc, "entrance_fee" => 300, "event_type_id" => 3],
            ['id' => 7, 'title' => 'Silvestrovská párty', 'date' => date('Y-m-d H:i:s', strtotime('2022-12-31 19:00:00 GMT+2')), 'description' => $realEventSilvesterPartyDesc, 'entrance_fee' => 200, 'event_type_id' => 1],
            ['id' => 8, 'title' => 'Vánoční swingers párty', 'date' => date('Y-m-d H:i:s', strtotime('2022-12-24 19:00:00 GMT+2')), 'description' => $realEventChristmasPartyDesc, 'entrance_fee' => 1000, 'event_type_id' => 1],
            ['id' => 9, 'title' => 'Vannstein', 'date' => date('Y-m-d H:i:s', strtotime('2020-10-18 16:00 GMT+2')), 'description' => $realEventConcert, 'entrance_fee' => 350, 'event_type_id' => 2]
        ];

        DB::table('event')->insert($events);
    }
}

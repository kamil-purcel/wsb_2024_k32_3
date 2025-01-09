<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'isbn' => '9780008581404',
                'title' => 'Gangsta Granny',
                'authors' => 'David Walliams',
                'publisher' => 'HarperCollins',
                'published_date' => '2023-09-26',
                'category' => "Children's literature",
                'pages' => 296,
                'image' => '0000009.jpg',
                'description' => 'Another hilarious and moving novel from bestselling, critically acclaimed author David Walliams, the natural successor to Roald Dahl. A story of prejudice and acceptance, funny lists and silly words, this new book has all the hallmarks of David\'s previous bestsellers. Our hero Ben is bored beyond belief after he is made to stay at his grandma\'s house. She\'s the boringest grandma ever: all she wants to do is to play Scrabble, and eat cabbage soup. But there are two things Ben doesn\'t know about his grandma. 1) She was once an international jewel thief. 2) All her life, she has been plotting to steal the crown jewels, and now she needs Ben\'s help.',
                'quantity' => 2
            ],
            [
                'isbn' => '9780142424179',
                'title' => 'The Fault in Our Stars',
                'authors' => 'John Green',
                'publisher' => 'Penguin Books',
                'published_date' => '2014-04-08',
                'category' => 'Romance',
                'pages' => 352,
                'image' => '0000017.jpg',
                'description' => 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten. From John Green, #1 bestselling author of The Anthropocene Reviewed and Turtles All the Way Down, The Fault in Our Stars is insightful, bold, irreverent, and raw. It brilliantly explores the funny, thrilling, and tragic business of being alive and in love.',
                'quantity' => 1
            ],
            [
                'isbn' => '9780156012195',
                'title' => 'The Little Prince',
                'authors' => 'Antoine de Saint-Exupéry',
                'publisher' => 'Reynal & Hitchcock',
                'published_date' => '1943-04-06',
                'category' => "Children's literature",
                'pages' => 96,
                'image' => '0000001.jpg',
                'description' => 'A pilot crashes in the Sahara Desert and encounters a strange young boy who calls himself the Little Prince. The Little Prince has traveled there from his home on a lonely, distant asteroid with a single rose. The story that follows is a beautiful and at times heartbreaking meditation on human nature.',
                'quantity' => 0
            ],
            [
                'isbn' => '9780439023528',
                'title' => 'The Hunger Games',
                'authors' => 'Suzanne Collins',
                'publisher' => 'Scholastic Press',
                'published_date' => '2010-07-03',
                'category' => 'Fantasy',
                'pages' => 384,
                'image' => '0000008.jpg',
                'description' => 'In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. Long ago the districts waged war on the Capitol and were defeated. As part of the surrender terms, each district agreed to send one boy and one girl to appear in an annual televised event called, "The Hunger Games," a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. The terrain, rules, and level of audience participation may change but one thing is constant: kill or be killed.',
                'quantity' => 1
            ],
            [
                'isbn' => '9780525556541',
                'title' => 'Looking for Alaska',
                'authors' => 'John Green',
                'publisher' => 'Dutton Books for Young Readers',
                'published_date' => '2023-04-04',
                'category' => 'Novel',
                'pages' => 272,
                'image' => '0000042.jpg',
                'description' => 'First drink. First prank. First friend. First love. Last words. Miles Halter is fascinated by famous last words—and tired of his safe life at home. He leaves for boarding school to seek what the dying poet François Rabelais called “The Great Perhaps.” Much awaits Miles at Culver Creek, including Alaska Young, who will pull Miles into her labyrinth and catapult him into the Great Perhaps.',
                'quantity' => 1
            ],
            [
                'isbn' => '9780553496673',
                'title' => 'Everything, Everything',
                'authors' => 'Nicola Yoon',
                'publisher' => 'Ember',
                'published_date' => '2017-03-07',
                'category' => 'Romance',
                'pages' => 352,
                'image' => '0000020.jpg',
                'description' => 'Risk everything . . . for love with this #1 New York Times bestseller. What if you couldn’t touch anything in the outside world? Never breathe in the fresh air, feel the sun warm your face . . . or kiss the boy next door? In Everything, Everything, Maddy is a girl who’s literally allergic to the outside world, and Olly is the boy who moves in next door . . . and becomes the greatest risk she’s ever taken. Everything, Everything will make you laugh, cry, and feel everything in between. It\'s an innovative, inspiring, and heartbreakingly romantic debut novel that unfolds via vignettes, diary entries, illustrations, and more.',
                'quantity' => 1
            ],
            [
                'isbn' => '9781338216660',
                'title' => 'Harry Potter and the Cursed Child',
                'authors' => 'J. K. Rowling, Jack Thorne, John Tiffany',
                'publisher' => 'Arthur A. Levine Books',
                'published_date' => '2017-07-25',
                'category' => 'Adventure Drama Fantasy',
                'pages' => 336,
                'image' => '0000002.jpg',
                'description' => 'It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children. While Harry grapples with a past that refuses to stay where it belongs, his youngest son, Albus, must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: Sometimes, darkness comes from unexpected places.',
                'quantity' => 1
            ],
            [
                'isbn' => '9781338216790',
                'title' => 'Fantastic Beasts and Where to Find Them',
                'authors' => 'J. K. Rowling',
                'publisher' => 'Arthur A. Levine Books',
                'published_date' => '2017-11-07',
                'category' => 'Fantasy',
                'pages' => 160,
                'image' => '0000007.jpg',
                'description' => 'Fantastic Beasts and Where to Find Them, Newt Scamander\'s classic compendium of magical creatures, has delighted generations of wizarding readers. With this beautiful, large-scale new edition illustrated in full color, Muggles too will have the chance to discover where the Runespoor lives, what the Puffskein eats, and why shiny objects should always be kept away from the Niffler. Proceeds from the sale of this book will go to Comic Relief and J.K. Rowling\'s international charity, Lumos, which will do magic beyond the powers of any wizard.',
                'quantity' => 1
            ],
            [
                'isbn' => '9781428181922',
                'title' => 'Diary of a Wimpy Kid',
                'authors' => 'Jeff Kinney',
                'publisher' => 'Alliance Entertainment',
                'published_date' => '2010-01-01',
                'category' => 'Comedy',
                'pages' => 224,
                'image' => '0000028.jpg',
                'description' => 'It\'s a new school year, and Greg Heffley finds himself thrust into middle school, where undersized weaklings share the hallways with kids who are taller, meaner, and already shaving. The hazards of growing up before you\'re ready are uniquely revealed through words and drawings as Greg records them in his diary.',
                'quantity' => 1
            ],
            [
                'isbn' => '9781534427037',
                'title' => 'To All the Boys I\'ve Loved Before',
                'authors' => 'Jenny Han',
                'publisher' => 'Simon & Schuster Books for Young Readers',
                'published_date' => '2018-04-24',
                'category' => 'Romance',
                'pages' => 1072,
                'image' => '0000022.jpg',
                'description' => 'To All the Boys I’ve Loved Before is now a major motion picture streaming on Netflix! New York Times bestselling author Jenny Han’s beloved novels are now available together in this delightful paperback boxed set! What if all the crushes you ever had found out how you felt about them…all at once? Lara Jean Song keeps her love letters in a hatbox her mother gave her. They aren’t love letters that anyone else wrote for her; these are ones she’s written. One for every boy she’s ever loved—five in all.',
                'quantity' => 1
            ],
        ]);
    }
}

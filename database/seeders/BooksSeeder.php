<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'The Adulterans',
            'author' => 'Joe Dunthorne',
            'year' => 2018,
            'synopsis' => 'Ray Morris is a tech journalist with a forgettable face, a tiresome manner, a small but dedicated group of friends, and a wife, Garthene, who is pregnant.',
            'image' => 'Book1.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Big Book of Dad Jokes',
            'author' => 'Joe Kerz',
            'year' => 2020,
            'synopsis' => 'Nothing is more hilarious for moms, sons, and daughters than the bad jokes dads tell. (Well, at least he thinks theyre hilarious . . .)',
            'image' => 'Book2.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'It',
            'author' => 'Stephen King',
            'year' => 2017,
            'synopsis' => 'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil',
            'image' => 'Book3.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'The Hunger',
            'author' => 'Alma Katsu',
            'year' => 2018,
            'synopsis' => 'The Hunger retells the infamous story of the Donner Party, with a supernatural twist.',
            'image' => 'Book4.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Divergent',
            'author' => 'Veronica Roth',
            'year' => 2014,
            'synopsis' => 'Divergent follows the story of Beatrice (Tris) Prior in a new dystopian world.',
            'image' => 'Book5.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Insurgent',
            'author' => 'Veronica Roth',
            'year' => 2015,
            'synopsis' => 'Insurgent, by Veronica Roth, is the second novel in the three-part Divergent series and describes a revolution in a post-apocalyptic Chicago. ',
            'image' => 'Book6.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Allegiant',
            'author' => 'Veronica Roth',
            'year' => 2016,
            'synopsis' => 'Tris (Shailene Woodley) escapes with Four (Theo James) to journey beyond the wall that encloses Chicago.',
            'image' => 'Book7.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Four : a Divergent',
            'author' => 'Veronica Roth',
            'year' => 2014,
            'synopsis' => 'The first story of the collection, Free Four: Tobias Tells the Divergent Knife-Throwing Scene,',
            'image' => 'Book8.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Four : The Traitor',
            'author' => 'Veronica Roth',
            'year' => 2014,
            'synopsis' => '"The Traitor" takes place two years after "The Son" and runs parallel with the early events in Divergent.',
            'image' => 'Book9.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Four : The Transfer',
            'author' => 'Veronica Roth',
            'year' => 2015,
            'synopsis' => 'The Transfer is a short story about Tobias Eaton, otherwise known to the world as Four.',
            'image' => 'Book10.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Four : The Son',
            'author' => 'Veronica Roth',
            'year' => 2015,
            'synopsis' => 'Two years after the events of The Son, Tobias "Four" Eaton is working as the instructor for Dauntless transfer initiates, including Tris Prior.',
            'image' => 'Book11.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Horns',
            'author' => 'Joe Hill',
            'year' => 2009,
            'synopsis' => ' a horror novel with strong paranormal themes by Joe Hill, centers on a man who commits many terrible deeds one night and wakes up the next morning with devil horns.',
            'image' => 'Book12.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Crazy Rich Asians',
            'author' => 'Kevin Kwan',
            'year' => 2018,
            'synopsis' => 'Rachel Chu is happy to accompany her longtime boyfriend, Nick, to his best friends wedding in Singapore.',
            'image' => 'Book13.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Red White & Royal Blue',
            'author' => 'Casey McQuiston',
            'year' => 2019,
            'synopsis' => 'The novel centres around the character of Alex Claremont-Diaz, the First Son of the United States, and his romantic relationship with Prince Henry, a British prince.',
            'image' => 'Book14.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Wish List',
            'author' => 'Sophia Money-Coutts',
            'year' => 2020,
            'synopsis' => 'This Christmas, love is top of Florence Fairfax’s wish list ’Feel-good and enormous fun’',
            'image' => 'Book15.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Forget Not To Laugh',
            'author' => 'Jayanta Mallick',
            'year' => 2016,
            'synopsis' => 'One of the things we can do to enjoy life more is to laugh.',
            'image' => 'Book16.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'The Donut Trap',
            'author' => 'Julie Tieu',
            'year' => 2021,
            'synopsis' => 'Jasmine quickly loses herself in a cyclical routine of donuts, Netflix, and sleep. ',
            'image' => 'Book17.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'The Night',
            'author' => 'Mara Franzis',
            'year' => 2015,
            'synopsis' => 'A couple become trapped inside a hotel with their demons -- real and imagined -- ',
            'image' => 'Book18.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Stairway To Hell',
            'author' => 'Richard Hughes',
            'year' => 2015,
            'synopsis' => 'From The Author Of Behind The Door',
            'image' => 'Book19.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Incarnate',
            'author' => 'Ramsey Campbell',
            'year' => 1983,
            'synopsis' => 'Molly, a young television production assistant, and her lover, Martin, struggle for survival against a monstrous,',
            'image' => 'Book20.jpg'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Fact; 
use App\Dog; 

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Collie')->pluck('id')->first(), 
            'content' => 'The name Collie comes from the Celtic word, colley, meaning "useful" or "faithful".',
            'source' => 'http://mentalfloss.com/article/67113/11-bright-facts-about-border-collies'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'German Shepherd')->pluck('id')->first(), 
            'content' => 'Studies indicate a German Shepherd will obey a command (when first given) 95% of the time.',
            'source' => 'https://blog.pawedin.com/dogs/102-fun-facts-about-german-shepherds/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Basenji')->pluck('id')->first(), 
            'content' => 'Basenjis lived with the ancient Egyptians and have been around perhaps since 4000 BCE.',
            'source' => 'http://mentalfloss.com/article/71941/10-super-smart-facts-about-basenjis'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Basset Hound')->pluck('id')->first(), 
            'content' => 'On average, basset hounds are not much more than a foot tall (14 inches). In fact, their name comes from the French word bas, meaning "low" or "short".',
            'source' => 'http://mentalfloss.com/article/71703/9-floppy-facts-about-basset-hounds'
        ]);  
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Beagle')->pluck('id')->first(), 
            'content' => 'Whether he looks it or not, Snoopy from the "Peanuts" is a Beagle.',
            'source' => 'http://healthypets.mercola.com/sites/healthypets/archive/2015/04/24/10-beagle-facts.aspx.'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bloodhound')->pluck('id')->first(), 
            'content' => 'The U.S Court of Law allows evidence in courts that is recovered with the help of a Bloodhound; this is the only breed of dog the court recognizes.',
            'source' => 'http://www.terrificpets.com/articles/10278765.asp'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Dachshund')->pluck('id')->first(), 
            'content' => 'The name Daschund is a mix of "dachs" meaning "badger" and "hund" meaning "dog". The dogs were originally bred to hunt badgers.',
            'source' => 'http://mentalfloss.com/article/63006/9-spunky-facts-about-dachshunds'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Greyhound')->pluck('id')->first(), 
            'content' => 'Greyhounds have a long history. The breed is mentioned in both the Bible and The Odyssey. It beleived they mingled with the Ancient Egyptians.',
            'source' => 'http://mentalfloss.com/article/69004/13-fast-facts-about-greyhounds'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Whippet')->pluck('id')->first(), 
            'content' => "Nicknames for the whippet inlcude: rag dog, poor man's greyhound, lazy man's dog, and miniature greyhound.",
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'American Eskimo Dog')->pluck('id')->first(), 
            'content' => 'The American Eskimo Dog was popular with traveling circuses starting in the late 19th century.',
            'source' => 'http://www.akc.org/content/entertainment/articles/6-facts-about-the-american-eskimo-dog/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Boston Terrier')->pluck('id')->first(), 
            'content' => 'Boston Terriers were originally bigger (~40 pounds), as they were bred for pit fighting. As the sport died, the breed shrunk to about half the size.',
            'source' => 'https://mom.me/pets/19424-cool-facts-about-boston-terriers/item/boston-terrier2/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bulldog')->pluck('id')->first(), 
            'content' => 'Bulldogs can become very angry if disturbed while eating.',
            'source' => 'http://bulldogs.com/dog/20-facts'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chinese Shar-Pei')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chow Chow')->pluck('id')->first(), 
            'content' => 'A ruler of the Tang dynasty is believed to have owned over 5000 chows.',
            'source' => 'http://mentalfloss.com/article/74605/11-fluffy-facts-about-chow-chows'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Dalmatian')->pluck('id')->first(), 
            'content' => 'Up to 12% of Dalmatians are deaf. Many others can only hear with one ear.',
            'source' => 'http://pets.thenest.com/weird-fun-dalmatians-5792.html'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'French Bulldog')->pluck('id')->first(), 
            'content' => 'A French bulldog was on board the Titanic. While his owner lived, the dog died in the freezing water.',
            'source' => 'https://mom.me/pets/19347-cool-facts-about-french-bulldogs/item/french-bulldog-rubber-duck/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Poodle')->pluck('id')->first(), 
            'content' => 'Poodles were originally bred to retrieve ducks and other birds from the water. In fact, their name comes from "pudel", German for "puddle".',
            'source' => 'http://mentalfloss.com/article/64749/10-fancy-facts-about-poodles'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Brittany')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chesapeake Bay Retriever')->pluck('id')->first(), 
            'content' => 'The Chesapeake Bay Retriever is the state dog of Maryland.',
            'source' => 'https://mom.me/pets/19463-cool-facts-about-chesapeake-bay-retrievers/item/chesapeake-bay-retriever6/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Cocker Spaniel')->pluck('id')->first(), 
            'content' => 'Cocker Spaniels first came to the United States via the Mayflower in 1620.',
            'source' => 'http://mentalfloss.com/article/73786/10-elegant-facts-about-cocker-spaniels'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'English Setter')->pluck('id')->first(), 
            'content' => 'English Setters came from England where they were called "Setting Spaniels".',
            'source' => 'http://www.dfs-pet-blog.com/2014/02/english-setter/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Golden Retriever')->pluck('id')->first(), 
            'content' => 'Golden retrievers are considered to be the fourth smartest breed, behind Border Collies, Poodles, and German Shepherds.',
            'source' => 'http://www.countryliving.com/life/kids-pets/news/a35634/15-things-you-didnt-know-about-golden-retrievers/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Irish Setter')->pluck('id')->first(), 
            'content' => 'Three US Presidents - Harry Truman , Ronald Reagan, and Richard Nixon - all owned Irish Setters.',
            'source' => 'https://mom.me/pets/19389-cool-facts-about-irish-setters/item/richard-nixon-irish-setter/'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Labrador Retriever')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);

        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Pointer')->pluck('id')->first(), 
            'content' => 'The American Kennel Club calls the Pointer the Cadillac of Bird Dogs.',
            'source' => 'http://www.akc.org/content/entertainment/articles/9-facts-about-the-pointer/'
        ]); 
      
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Akita')->pluck('id')->first(), 
            'content' => 'Akitas used to be known as "snow country dogs." They have webbed toes to talk on snow.',
            'source' => 'http://www.akc.org/content/entertainment/articles/akitas-10-facts-that-will-surprise-you/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Alaskan Malamute')->pluck('id')->first(), 
            'content' => 'The dogs were originally used to hunt seals, chase away polar bears, and drive sleds.',
            'source' => 'https://blog.pawedin.com/dogs/facts-alaskan-malamute/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bernese Mountain Dog')->pluck('id')->first(), 
            'content' => 'Before delivery trucks, Bernese Mountain Dogs helped carry dairy and food goods from farm to farm (in the 1800s).',
            'source' => 'http://mentalfloss.com/article/68225/10-stocky-facts-about-bernese-mountain-dogs'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Boxer')->pluck('id')->first(), 
            'content' => 'Due to their short muzzles boxers are prone to snoring.',
            'source' => 'http://3milliondogs.com/3-million-dogs/10-facts-about-boxers/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bullmastiff')->pluck('id')->first(), 
            'content' => 'The live mascot of the Cleveland Browns is a Bullmastiff named Swagger.',
            'source' => 'http://www.akc.org/content/entertainment/articles/7-bullmastiff-facts/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chinook')->pluck('id')->first(), 
            'content' => 'The Chinook is the official state dog of New Hampshire.',
            'source' => 'http://www.akc.org/content/entertainment/articles/7-facts-chinook/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Doberman Pinscher')->pluck('id')->first(), 
            'content' => 'The Doberman is a relatively new breed, originating in the early 1880s.',
            'source' => 'http://mentalfloss.com/article/69404/10-smart-facts-about-dobermans'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Great Dane')->pluck('id')->first(), 
            'content' => 'Due to his size, the Great Dane is called the "Apollo of the dog world."',
            'source' => 'http://www.akc.org/content/entertainment/articles/7-facts-about-the-great-dane/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Mastiff')->pluck('id')->first(), 
            'content' => 'In terms of mass, the English Mastiff is the largest dog breed.',
            'source' => 'https://mom.me/pets/19368-cool-facts-about-english-mastiffs/item/big-mastiff/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Rottweiler')->pluck('id')->first(), 
            'content' => 'Rottweilers have a bite force of 328 pounds. A shark\'s bite force is about half, at 669 pounds.',
            'source' => 'http://mentalfloss.com/article/72956/10-robust-facts-about-rottweiler'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Siberian Husky')->pluck('id')->first(), 
            'content' => 'A group of Huskies helped saved a small town in Alaska from diphtheria by traveling 674 miles in -23-degree weather. The story inspired the animated film Balto.',
            'source' => 'https://blog.pawedin.com/dogs/99-fun-facts-about-siberian-huskies/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'St.Bernard')->pluck('id')->first(), 
            'content' => 'An average St. Bernard weights between 130 and 200 pounds.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chihuahua')->pluck('id')->first(), 
            'content' => 'Like human babies, chihuahuas have a soft spot on their heads called molera. In some cases, a dog will keep the spot for life.',
            'source' => 'http://mentalfloss.com/article/64317/10-feisty-facts-about-chihuahuas'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'English Toy Spaniel')->pluck('id')->first(), 
            'content' => 'The ancestry of the English Toy Spaniel is traced to Japan.',
            'source' => 'http://www.dogscope.com/english-toy-spaniel'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Maltese')->pluck('id')->first(), 
            'content' => 'The Maltese coexisted with the Greeks, Romans, and Egyptians.',
            'source' => 'http://mentalfloss.com/article/69697/11-spunky-facts-about-maltese'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Pomeranian')->pluck('id')->first(), 
            'content' => 'Mozart dedicated an aria to his Pomeranian, Pimperl.',
            'source' => 'https://www.aspcapetinsurance.com/blog/2016/december/28/fun-facts-about-pomeranians/'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Shih Tzu')->pluck('id')->first(), 
            'content' => '"Shih Tzu" translates to "little lion".',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Yorkshire Terrier')->pluck('id')->first(), 
            'content' => 'It is thought that the Yorkshire Terrier is the original basis for Toto in the The Wizard of Oz.',
            'source' => 'http://www.akc.org/content/entertainment/articles/7-things-about-yorkshire-terriers/'
        ]);
    }
}

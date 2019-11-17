# Bees In The Trap
**This is a simple game which I have written as part of a coding test.**
    
## Installation
    composer install

Run the game once all packages have been installed.

Examples:
    
    ./beesinthetrap
    php beesinthetrap

### How to Play
To play type
`HIT` and hit return. Keep typing `HIT` (and return) until the Beehive has been completely destroyed.

## Bees
The number of bees and the type of bees are all set within the Commands\PlayCommand class:

     // file: verheesj\KillTheBeesGame\Commands\PlayCommand.php
     [...]
        $hive->add(Queen::class, 1);
        $hive->add(Drone::class, 5);
        $hive->add(Worker::class, 8);
        
        // Adding a new type of Bee with a quantity of 12
        $hive->add(Example::class, 12);
     [...]
     
 You must extend the class `verheesj\KillTheBeesGame\Game\Bee`
    
    // file: Example.php
    
    use verheesj\KillTheBeesGame\Game\Bee;
    use verheesj\KillTheBeesGame\Interfaces\BeeInterface;
    
    class Example extends Bee implements BeeInterface
    {
         // Define the name of your Bee
         protected $type = 'Example';
         
         // Change this to the desired HP
         protected $hp = 100;
         
         // How much damage should be inflicted on this Bee when it is attacked?
         protected $damage = 8;
     
         public function __construct()
         {
             parent::__construct();
             // This controls whether the hive dies along with your new type of Bee
             // $this->killAll = true;
         }
     }
    
Many thanks for reviewing. Look forward to working with you soon! :)

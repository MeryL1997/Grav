---
title: 'Ejercicio del Sencor'
date: '11:12 06/10/2019'
taxonomy:
    category:
        - blog
    tag:
        - practica
        - tarea
body_classes: 'header-lite fullwidth blogstyling'
author: 'Mery Lema'
---

**_Solucion1_**


{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator
        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
	    elevator.goToFloor(2);
        });
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}


_**Solucion2**_


{
init: function(elevators, floors) {
function initElevator(elevator) {   
elevator.on("idle", function() {});    
elevator.on("floor_button_pressed", function(floorNum) {          
  elevator.goToFloor(floorNum, true);           
});       
elevator.on("passing_floor", function(floorNum, direction) {      
          var stopAtFloor = false;              
elevator.destinationQueue = elevator.destinationQueue.filter(function (n, i) {
                 if (n == floorNum) {         
stopAtFloor = true;       
 }         
return n != floorNum;               
});
   if (stopAtFloor) {
              elevator.checkDestinationQueue();
                elevator.goToFloor(floorNum, true);    
                }
         });
 }; 
 function findNearestElevator(floor) {
        var possibilities = elevators;
        .map(function (e) { 
   return { 
  elevator: e,  
  distance: e.destinationQueue.length == 0 ? 0 : Math.abs(floor.floorNum() - e.currentFloor()),
                }; 
   }); 
 possibilities.sort(function (left, right) {
        return left.distance - right.distance;
        });
   return possibilities[0].elevator;
   
     };
function initFloor(floor) {
         floor.on("up_button_pressed", function() {
            // Maybe tell an elevator to go to this floor?
               findNearestElevator(floor).goToFloor(floor.floorNum());
          });
            floor.on("down_button_pressed", function() {
          // Maybe tell an elevator to go to this floor?
 findNearestElevator(floor).goToFloor(floor.floorNum());
  });  
  };   
 elevators.forEach(initElevator);
  floors.forEach(initFloor);
  },
    update: function(dt, elevators, floors) {
  // We normally don't need to do anything here
}
}


**_Solucion 3_**


{
    init: function(elevators, floors) {
    function initElevator(elevator) {
            elevator.on("idle", function() {});
            elevator.on("floor_button_pressed", function(floorNum) {
                elevator.goToFloor(floorNum, true);
            });
            elevator.on("passing_floor", function(floorNum, direction) {
                var stopAtFloor = false;
                elevator.destinationQueue = elevator.destinationQueue.filter(function (n, i) {
                    if (n == floorNum) { 
                        stopAtFloor = true;
                    }
                    return n != floorNum;
                });
                if (stopAtFloor) {
                    elevator.checkDestinationQueue();
                    elevator.goToFloor(floorNum, true);                
                }
            });
        };
        function findNearestElevator(floor) {
            var possibilities = elevators
                .map(function (e) { 
                    return { 
                        elevator: e, 
                        distance: e.destinationQueue.length == 0 ? 0 : Math.abs(floor.floorNum() - e.currentFloor()),
                    }; 
                });
            possibilities.sort(function (left, right) {
                return left.distance - right.distance;
            });
            return possibilities[0].elevator;
        };
        function initFloor(floor) {
            floor.on("up_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
            floor.on("down_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
        };
        elevators.forEach(initElevator);
        floors.forEach(initFloor);
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}


_**Solucion 4**_


{
    init: function(elevators, floors) {  
        function initElevator(elevator) {
            elevator.on("idle", function() {});
            elevator.on("floor_button_pressed", function(floorNum) {
                elevator.goToFloor(floorNum, true);
            });
            elevator.on("passing_floor", function(floorNum, direction) {
                var stopAtFloor = false;
                elevator.destinationQueue = elevator.destinationQueue.filter(function (n, i) {
                    if (n == floorNum) { 
                        stopAtFloor = true;
                    }
                    return n != floorNum;
                });
                if (stopAtFloor) {
                    elevator.checkDestinationQueue();
                    elevator.goToFloor(floorNum, true);                
                }
            });
        };
        function findNearestElevator(floor) {
            var possibilities = elevators
                .map(function (e) { 
                    return { 
                        elevator: e, 
                        distance: e.destinationQueue.length == 0 ? -1 : Math.abs(floor.floorNum() - e.currentFloor()),
                    }; 
                });
            possibilities.sort(function (left, right) {
                return left.distance - right.distance;
            });
            return possibilities[0].elevator;
        };
        function initFloor(floor) {
            floor.on("up_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
            floor.on("down_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
        };
        elevators.forEach(initElevator);
        floors.forEach(initFloor);
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}


**_Solucion5_**


{
    init: function(elevators, floors) { 
        function initElevator(elevator) {
            elevator.on("idle", function() {});
            elevator.on("floor_button_pressed", function(floorNum) {
                elevator.goToFloor(floorNum);
            });
            elevator.on("passing_floor", function(floorNum, direction) {
                var stopAtFloor = false;
                elevator.destinationQueue = elevator.destinationQueue.filter(function (n) {
                    if (n == floorNum) { 
                        stopAtFloor = true;
                    }
                    return n != floorNum;
                });
                if (stopAtFloor) {
                    elevator.checkDestinationQueue();
                    elevator.goToFloor(floorNum, true);
                }
            });
        };
        function findNearestElevator(floor) {
            var possibilities = elevators
                .map(function (e) { 
                    return { 
                        elevator: e, 
                        score: e.loadFactor() 
                            + e.destinationQueue.length 
                            + (Math.abs(floor.floorNum() - e.currentFloor()) / floors.length),
                    }; 
                });
            possibilities.sort(function (left, right) {
                return left.score - right.score;
            });
            return possibilities[0].elevator;
        };
        function initFloor(floor) {
            floor.on("up_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
            floor.on("down_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
        };
        elevators.forEach(initElevator);
        floors.forEach(initFloor);
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}


_**Solucion6**_


{
    init: function(elevators, floors) {
        function initElevator(elevator) {
            elevator.on("idle", function() {});
            elevator.on("floor_button_pressed", function(floorNum) {
                elevator.goToFloor(floorNum);
            });
            elevator.on("passing_floor", function(floorNum, direction) {
                var stopAtFloor = false;
                elevator.destinationQueue = elevator.destinationQueue.filter(function (n) {
                    if (n == floorNum) { 
                        stopAtFloor = true;
                    }
                    return n != floorNum;
                });
                if (stopAtFloor) {
                    elevator.checkDestinationQueue();
                    elevator.goToFloor(floorNum, true);
                }
            });
        };
        function findNearestElevator(floor) {
            var possibilities = elevators
                .map(function (e) { 
                    return { 
                        elevator: e, 
                        score: e.loadFactor() 
                            + e.destinationQueue.length 
                            + (Math.abs(floor.floorNum() - e.currentFloor()) / floors.length),
                    }; 
                });
            possibilities.sort(function (left, right) {
                return left.score - right.score;
            });
            return possibilities[0].elevator;
        };
        function initFloor(floor) {
            floor.on("up_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
            floor.on("down_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
        };
        elevators.forEach(initElevator);
        floors.forEach(initFloor);
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}

_**Solucion7**_
{
    init: function(elevators, floors) {
        function initElevator(elevator) {
            elevator.on("idle", function() {});
            elevator.on("floor_button_pressed", function(floorNum) {
                elevator.goToFloor(floorNum);
            });
            elevator.on("passing_floor", function(floorNum, direction) {
                var stopAtFloor = false;
                elevator.destinationQueue = elevator.destinationQueue.filter(function (n) {
                    if (n == floorNum) { 
                        stopAtFloor = true;
                    }
                    return n != floorNum;
                });
                if (stopAtFloor) {
                    elevator.checkDestinationQueue();
                    elevator.goToFloor(floorNum, true);
                }
            });
        };
        function findNearestElevator(floor) {
            var possibilities = elevators
                .map(function (e) { 
                    return { 
                        elevator: e, 
                        score: e.loadFactor() 
                            + e.destinationQueue.length 
                            + (Math.abs(floor.floorNum() - e.currentFloor()) / floors.length),
                    }; 
                });
            possibilities.sort(function (left, right) {
                return left.score - right.score;
            });
            return possibilities[0].elevator;
        };
        function initFloor(floor) {
            floor.on("up_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
            floor.on("down_button_pressed", function() {
                // Maybe tell an elevator to go to this floor?
                findNearestElevator(floor).goToFloor(floor.floorNum());
            });
        };
        elevators.forEach(initElevator);
        floors.forEach(initFloor);
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}_
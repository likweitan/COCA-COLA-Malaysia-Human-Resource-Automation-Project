var timeOut;

class Items {
    constructor(icon, backgroundColor) {
        this.$element = $(document.createElement("div"));
        this.icon = icon;
        this.$element.addClass("items");
        this.$element.css("background-color", backgroundColor);
        var i = document.createElement("i");
        $(i).addClass("fi-" + icon);
        this.$element.append(i);
        this.prev = null;
        this.next = null;
        this.isMoving = false;
        var element = this;
        this.$element.on("mousemove", function() {
            clearTimeout(timeOut);
            timeOut = setTimeout(function() {
                if (element.next && element.isMoving) {
                    element.next.moveTo(element);
                } 
            }, 10);
        });
    }
    
    moveTo(items) {
        anime({
            targets: this.$element[0],
            left: items.$element.css("left"),
            top: items.$element.css("top"),
            duration: 700,
            elasticity: 500
        });
        if (this.next) {
            this.next.moveTo(items);
        }
    }

    updatePosition() {    
        anime({
            targets: this.$element[0],
            left: this.prev.$element.css("left"),
            top: this.prev.$element.css("top"),
            duration: 200
        });
        
        if (this.next) {
            this.next.updatePosition();
        }
    }
}

class Menu {
    constructor(menu) {
        this.$element = $(menu);
        this.size = 0;
        this.first = null;
        this.last = null;
        this.timeOut = null;
        this.hasMoved = false;
        this.status = "closed";
    }
    
    add(items) {
        var menu = this;
        if (this.first == null) {
            this.first = items;
            this.last = items;
            this.first.$element.on("mouseup", function() {
                if (menu.first.isMoving) {
                    menu.first.isMoving = false;        
                } else {
                    menu.click();
                }
            }); 
            items.$element.draggable(
                {
                    start: function() {
                        menu.close();
                        items.isMoving = true;
                    }  
                },
                {
                    drag: function() {
                        if (items.next) {
                            items.next.updatePosition();
                        }
                    }
                },
                {
                    stop: function() {
                        items.isMoving = false;
                        items.next.moveTo(items);
                    }
                }
            );
        } else {
            this.last.next = items;
            items.prev = this.last;
            this.last = items;
        }
        this.$element.after(items.$element);
        
        
    }
    
    open() {
        this.status = "open";
        var current = this.first.next;
        var iterator = 1;
        var head = this.first;
        var sens = head.$element.css("left") < head.$element.css("right") ? 1 : -1;
        while (current != null) {
            anime({
                targets: current.$element[0],
                left: parseInt(head.$element.css("left"), 10) + (sens * (iterator * 50)),
                top: head.$element.css("top"),
                duration: 500
            });
            iterator++;
            current = current.next;
        }    
    }
    
    close() {
        this.status = "closed";
        var current = this.first.next;
        var head = this.first;
        var iterator = 1;
        while (current != null) {
            anime({
                targets: current.$element[0],
                left: head.$element.css("left"),
                top: head.$element.css("top"),
                duration: 500
            });
            iterator++;
            current = current.next;
        }
    }
    
    click() {
        if (this.status == "closed") {
            this.open();
        } else {
            this.close();
        }
    }
    
}

var menu = new Menu("#myMenu");
var items1 = new items("list");
var items2 = new items("torso", "#FF5C5C");
var items3 = new items("social-facebook", "#5CD1FF");
var items4 = new items("paypal", "#FFF15C");
var items5 = new items("link", "#64F592");

menu.add(items1);
menu.add(items2);
menu.add(items3);
menu.add(items4);
menu.add(items5);
$(document).delay(50).queue(function(next) {
    menu.open();
    next();
    $(document).delay(1000).queue(function(next) {
        menu.close();
        next();
    });
});
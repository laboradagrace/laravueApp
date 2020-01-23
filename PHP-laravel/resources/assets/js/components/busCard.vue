<template>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTqhQadJaMrj19H-y_l-lT0qsFCJLJDbmHwGto-x55d_zWqhlWg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><i class="fa fa-bus" aria-hidden="true"></i>{{bus_name}}</h4>
                        <p class="card-text"><i class="fas fa-chair-office"></i> Available seats: {{seats}}</p>
                        <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Departure Time: {{departure_time}}</p>
                        <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Arrival Time: {{arrival_time}}</p>
                        <p class="card-text"><i class="fa fa-hourglass-end" aria-hidden="true"></i> Duration: {{duration}}</p>
                        <button class= "btn btn-danger"><i class="fa fa-book" aria-hidden="true"></i> Book now!</button>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
</template>
<script>
export default{
    props:{
        bus_name:String,
        seats:Number,
        departure_time:Date,
        arrival_time: Date,
        duration: String
    }
};

</script>
<style>
.card-horizontal {
    display: flex;
    flex: 1 1 auto;
   
}
.card{
    background-color:#8AC0DE;
    margin-left:10%;
    margin-right:10%;
}
.img{
    height: 300px;
    width: 300px;
}
.btn-danger{
    float:right; 
}
.card-body{
    background-color:#1A4668;
    color:white;
}
</style>
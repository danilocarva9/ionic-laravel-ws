import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';



@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  users: any;
 
  constructor(public navCtrl: NavController, public http: Http) {

    this.http.get('http://127.0.0.1:8000/api/user/getAll').map(res => res.json()).subscribe(data => {
      this.users = data;
      console.log(this.users);
    });

  }

}

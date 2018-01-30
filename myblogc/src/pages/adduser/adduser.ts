import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {Validators, FormBuilder, FormGroup } from '@angular/forms';

/**
 * Generated class for the AdduserPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */



@IonicPage()
@Component({
  selector: 'page-adduser',
  templateUrl: 'adduser.html',
})
export class AdduserPage {
  //dados: any = {};
  private dados : FormGroup;

  constructor(public navCtrl: NavController, public navParams: NavParams, private formBuilder: FormBuilder) {

    this.dados = this.formBuilder.group({
      nome: ['', Validators.required],
      email: [''],
    });

  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad AdduserPage');
  }


 

  cadastrarDados()
  {
  
  
    console.log(this.dados.value.nome);
    console.log(this.dados.value.email);
    // var links = 'http://www.website.com/api.php';
    
    // dados.user_id = loggeduser;
    // $http.post(links, {user_id : dados.user_id, mac_id : dados.mac_id}).then(function (res){
    //   dados.response = res.data;
    //     if (dados.response == 1) {
    //       dados.messages = 'Correct.';
    //     }
    //     else if (dados.response == 0)
    //     {
    //       dados.messages = 'False.';
    //     }
    // });

  }

}

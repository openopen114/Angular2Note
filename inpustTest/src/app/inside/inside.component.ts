import { Component, OnInit ,Input} from '@angular/core';

@Component({
  selector: 'app-inside',
  templateUrl: './inside.component.html',
  styleUrls: ['./inside.component.css']
})
export class InsideComponent implements OnInit {

  @Input()
  public inputTextFromAppComp='';

  constructor() { }

  ngOnInit() {
  }

}

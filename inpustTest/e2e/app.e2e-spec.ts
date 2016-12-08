import { IotestPage } from './app.po';

describe('iotest App', function() {
  let page: IotestPage;

  beforeEach(() => {
    page = new IotestPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});

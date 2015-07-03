<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$pub_key="-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAv3yhO5cJ5Xb48LGm+eM4ZOvHwLWEG/lqYDjnl09diqe3ggM1
8vcvZ9tyYZAw3k+Su0PZjUqKjfjSeAvjfgMC4XrzdzLzpBjGJpzj9eeB+A6XbRBL
cVyC3ymXR/P41Pc3Rq8B5uidqotI2KIyvU62yrZTbMulxBA7IzYFDeyyPxAwRs9M
NbC60U5ulVCz1SrBgkfieYT0coslv5qfK1YgE/bsKj0FDXp2wCmlZorRN2knGQ93
Qo4l/euQ7e2Mhgb2CUewTRKokJaCbv3cP1Ax72GlMKhvJuaOAHrOgv9nCe8Kc0bo
uMs4FVhI43Cz9teVRMYJLzFMx3zqOwAlusRJyQIDAQABAoIBAC3fWXDBGinSeoiO
xoWOnW/v3AaadW+OLKGogDKLXMlerGOFCWOPO9gRhjFBLbPUND6QXomulcq1FRaV
IoaJiiMiJTklB6EEHlQZubKrJ0OZm0URZkFd/Cwh9o/SLoY2QxO30SjUCRFWFLlx
Ad7AAKJHU2z4zFlP2hrxUfyn+3uHpxdYsd+wK6J/vEJuGe5u41F3eNw03KJEN5sg
sQbS9NIhi06HOZb31oXt/uotFiqEzEfuUJo62GgVJCSC0XRLHc2dhi7QPZBs59vo
5lX0Q5bNwDyAFwwFGxs67I0V7OKSuw88l3NWSIZoUmFSluoRowDwSex9iDhJ2x7Z
bfAvnAECgYEA59ryZ7i7SF0r7gP1EYIHqTNw3dEIPb1pKhmy7lfidx93H+5b1H4A
0usIOn8nnGcqV+QUxMhoK0OqUIVZb0ovVzf2htc09e06EVf1a59K7SZX6XVL701e
6bYUZSE18WpiK1xFaNkrWs7SVV3WOp48e6/kfVKrTErjqcPtRFRYbOECgYEA021/
NmbhTeKh99NChHGl51HcIgOCoqIS4s8OTNjdlnqwfvGMqKpS34xEn8v+bmln2qye
/CuQUKTFdG3xnKDtsl9iMDzzvKvuJSg9TJNTL1eX71oLG8vD7AfGOkp2RKH4RFlX
4EYxHjnr4cEi2e434NxgfRu7u+hg1/dsazCWUekCgYEAhoU574P25V1ph4c0QRw4
Zas66PfG2Et1IMAYWMEU3BidfSFGllslDzreY1IzIUOaBbSHeETua2uu/VjhMvjP
zsLhfgqO58Dj1/w4oGCjkESW7RTpIca6Ms85thM2wQMAQjge7V5TETS+RFlVWl1E
ql67Kxsz1+f7fxv2JZbqVwECgYBAE5FYVXm29xaLWzVvmlnjb0W98T5oN6Jtpr74
v0j40Bopft9YRrZzFbm+jD6CC+PzvBk656EHL8i/7oopJASl6I6DfBWKerjj/fwF
9yhg0rUzTyDKvciVAg4roGGTj1sEq+ccC2nbdUZt1vDPB4lb1q5PfFY7LsQa79ul
6MXF8QKBgDHnc4K3hDi/M0hEqkvEp4+ibjhwN/SZwa1PcBTGH5wxuxS4oMk7MZf/
ohiKKhffxETXg2j4QEnVlNfgQvsrX8Cr0ZlCJyBIz7a+uh1OfO07itTO6RaEuvEZ
tPMsoslM/mPkj1tnQb4OVkgzoejq/Gpy3WBLLMtkFarR7opoFMBz
-----END RSA PRIVATE KEY-----";
		openssl_get_publickey($pub_key);
        openssl_public_encrypt($plaintext,$crypttext, $pub_key );
        return(base64_encode($crypttext));
	}

}

/* End of file prueba.php */
/* Location: ./application/controllers/prueba.php */
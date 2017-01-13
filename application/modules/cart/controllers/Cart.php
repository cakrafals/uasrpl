<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Cart extends MX_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->module('template');
    }

    public function index()
    {

      redirect('cart/ty');
    }

    function ty()
    {
        if ($this->lib->login() == "")
        {
            $this->session->set_flashdata('not_login', '<p style="color: red;">Silahkan login terlebih dahulu.</p>');
            redirect('login');
        }
        else
        {
            $this->load->model('M_cart');

            $id_user = $this->session->userdata('id');
            $cart_user = $this->M_cart->join_cart('buyer', $id_user);

            $data = array(
                'query' => $cart_user,
                'num' => $cart_user->num_rows(),
                'title' => 'Keranjang'
            );


            $this->template->navbar($data);
            $this->load->view('cart', $data);
            $this->template->footer();
        }
    }

    function checkout()
    {
        if ($this->lib->login() == "")
        {
            $this->session->set_flashdata('not_login', '<p style="color: red;">Silahkan login terlebih dahulu.</p>');
            redirect('login');
        }
        else
        {
            $this->load->model('M_cart');
            $this->load->model('products/M_products', 'M_products');

            $uri_product = $this->uri->segment(3);
            $auth_product = $this->M_products->get_where_custom(do_hash('id_products', 'sha1'), $uri_product);
            if ($auth_product->num_rows() > 0)
            {
                echo "Ada";
            }
            else
            {
                echo "Nothing";
            }


            // echo "Berhasil membeli produk";
        }
    }

    function en()
    {
        $this->load->library('encryption');

        $plain_text = 'This is a plain-text message!';
        $ciphertext = $this->encryption->encrypt($plain_text);
        echo $ciphertext;
    }

    function delete()
    {
        if ($this->lib->login() == "")
        {
            $this->session->set_flashdata('not_login', '<p style="color: red;">Silahkan login terlebih dahulu.</p>');
            redirect('login');
        }
        else
        {
            $this->load->model('M_cart');

            $uri_cart = $this->uri->segment(3);
            $this->M_cart->_delete('id_cart', $uri_cart);
            $this->session->set_flashdata('success_delete', '<p style="color: green;">Berhasil menghapus barang di keranjang.</p>');
            redirect('cart/ty');
            //echo $uri_cart;
        }
    }

    function _count_cart_user()
    {
        if ($this->lib->login() == "")
        {
            echo "";
        }
        else
        {
            $this->load->model('M_cart');

            $id_user = $this->session->userdata('id');
            $query = $this->M_cart->count_where('buyer', $id_user);
            if ($query > 0)
            {
                echo "<hr>";
                echo anchor('cart/ty', 'Cart '.$query);
            }
            else
            {
                echo "<hr>";
                echo "Cart 0";
            }
        }
    }

}

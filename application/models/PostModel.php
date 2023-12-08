<?php
class PostModel extends CI_Model
{
    public function Post_Data()
    {
        $post_name = $this->Post_Name();
        $this->load->model('PostModel');
        return $post = 'This is Post Data From Post Model.Post Name is ' . $post_name;
    }

    private function Post_Name()
    {
        return $post_name = "Food";
    }

    public function Post_Show($id)
    {
        if ($id == '1') {
            return $result = "This is Id 1";
        } else {
            return $result = "This is ID " . $id;
        }
    }

    public function demo()
    {
        return [
            'title' => "CodeIgniter 3",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, voluptatibus accusantium! Obcaecati quod sunt eos suscipit, eaque earum, praesentium animi esse ea laudantium et porro temporibus voluptatibus nulla ullam odit voluptatum aliquam sapiente, ipsum quasi perferendis voluptas eligendi nam vitae. Blanditiis quas, ea deleniti quibusdam mollitia aliquid. Rem tempore blanditiis atque expedita ratione voluptatem cumque sint. Non porro numquam delectus eos vero! Odio, tempore? Necessitatibus magni consequatur velit saepe animi enim ad aspernatur laborum, minima perspiciatis voluptatum amet vero magnam molestiae? Necessitatibus, repellat nulla eos iste consequatur reprehenderit vel ad blanditiis sequi, doloremque numquam consectetur nam esse, similique veritatis! Est corrupti, sint iste accusamus veritatis error officia eos beatae, eum, ducimus mollitia nesciunt. Illo iusto quidem aut ratione a, unde dolorem, tempora ipsum vel architecto velit quae, hic minima alias recusandae laborum repellendus omnis adipisci eaque. Amet unde ad dolor atque illum excepturi tempora tempore sequi harum impedit assumenda deleniti, modi dolorum. Quo expedita eaque sint non perferendis quam illo deserunt temporibus blanditiis deleniti rerum nobis nesciunt voluptates fugit, aperiam tempore quasi beatae! Id laboriosam consectetur cumque eos, totam repellendus accusamus, dolorum ipsum explicabo ab quas animi. Eveniet sequi sint soluta veritatis perferendis, illo possimus atque dolorem quisquam quaerat deserunt'
        ];
    }
}

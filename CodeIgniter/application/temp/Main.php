<?php
	class Main extends CI_Controller{

		public function index(){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_next_match();
			$x['next_match'] = $data;
			$data = $this->Main_model->get_matches_3();
			$x['next_matches_3'] = $data; 
			$data = $this->Main_model->get_team_details();
			$x['team_details'] = $data;
			$data = $this->Main_model->get_games_players_full();
			$x['games_players'] = $data;
			$data = $this->Main_model->get_player_details_full();
			$x['player_details_full'] = $data;
			$this->load->view('homepage',$x);
		}

		public function latest_result(){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_matches_join_fixtures();
			$x['matches'] = $data;
			$this->load->view('latest_result',$x);
		}

		public function fixtures(){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_fixtures();
			$x['fixtures'] = $data;
			$this->load->view('fixtures',$x);
		}

		public function scorecard($id){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_matches_join_fixtures_one_row($id);
			$x['all_details'] = $data;
			$data = $this->Main_model->get_substitutes($x['all_details']['play_team_1'],$id);
			$x['substitutes_1'] = $data;
			$data = $this->Main_model->get_substitutes($x['all_details']['play_team_2'],$id);
			$x['substitutes_2'] = $data;
			//print_r($x);
			
			$data = $this->Main_model->get_team_details();
			$x['team_details'] = $data;
			$data = $this->Main_model->get_games($id);
			$x['player_game'] = $data;
			$data = $this->Main_model->get_comments($id);
			$x['comments'] = $data;
			$data = $this->Main_model->get_games_players_full();
			$x['games_players'] = $data;
			$data = $this->Main_model->get_timeline($id);
			$x['timeline'] = $data;
			$x['id'] = $id;
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->view('scorecard',$x,$id);
			# id is used to indicate match_id
		}

		public function put_comments($id){
			$this->load->helper('form');
			$this->load->model('Main_model');
			$data = array( 
				'match_id' => $id,
            	'username' => $this->input->post('username'), 
            	'comment' => $this->input->post('comment')
            );
            if($data['username'] == NULL){
            	$data['username'] = "unkndown";
            }
            $this->Main_model->put_comments($data);  
            $this->scorecard($id);

		}

		public function team_details($id){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_team_details_one_row($id);
			$x['team_details_one_row'] = $data;
			$team_name = $data['NAME'];
			$data = $this->Main_model->get_player_details($team_name);
			$x['player_details'] = $data;
			$data = $this->Main_model->get_matches_join_fixtures();
			$x['matches'] = $data;
			$data = $this->Main_model->get_games_players_full();
			$x['games_players'] = $data;
			$this->load->view('team_details',$x); 
		}


		public function player_detail(){
			$this->load->model('Main_model');
			$id = $this->uri->segment(3);
			$y = $this->Main_model->get_next_match();
			$data['next_match'] = $y;
			$row1 =$this->Main_model->get_one_player($id);
			$data['rows']= $this->Main_model->get_all_game($id);
			$x = $this->Main_model->get_team_details();
			$data['team_details'] = $x;
			$data['mer2']=$row1;
			$this->load->view('player_detail',$data);    
		}


		public function auction(){
			$this->load->model('Main_model');
			$row['players']=$this->Main_model->get_desc_player() ;
			$this->load->view('auction',$row);
		}

		public function gallery(){
			$this->load->view('gallery');
		}


		public function contact(){
			$this->load->helper('form');
			$this->load->view('contactus');
		}

		public function contact_us_database(){
			$this->load->helper('form');
			$data = array(
					'name' => $this->input->post('ur_name'), 
			         'subject' => $this->input->post('ur_subject'),  
			         'email' => $this->input->post('ur_email'), 
			         'area' => $this->input->post('ur_area'), 
			);
			$this->load->model('Main_model');
			$this->Main_model->put_contact_details($data);
			$this->index();
		}

		public function about_us(){
			$this->load->view('about_us');
		}






















		public function admin_cse2k17(){
		    	$this->load->helper('form');
				$this->load->view('admin_cse2k17');
		    
		}

		public function admin_check(){
			$data = array( 
            'password' => $this->input->post('password'), 
         	);

         	$encrypted_password=md5($data['password']);
         	if($encrypted_password == "d00efa10104e2328092eaa0728f4aa23"){
         		session_start(); 
         		$_SESSION["user"] = "admin";
         		$this->load->view('admin');
         	}
         	else{
				$this->admin_cse2k17();
         	}
		}

		public function admin(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->model('Main_model');

				$this->load->helper('form');
				$this->load->view('admin');
				
			}
			else{
				$this->index();
			}
		
		}


		public function player_form_123558484(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->helper('form');
				$data = array( 
	            'game_id' => $this->input->post('game_id'),
	            'team_id' => $this->input->post('team_id'),  
	            'player_id' => $this->input->post('player_id'),  
	            'start' => $this->input->post('start'), 
	            'minutes' => $this->input->post('minutes'), 
	            'goals' => $this->input->post('goals'), 
	            'assists' => $this->input->post('assists'), 
	            'shots' => $this->input->post('shots'), 
	            'ontarget' => $this->input->post('ontarget'), 
	            'fouls' => $this->input->post('fouls'), 
	            'yellow' => $this->input->post('yellow'), 
	            'red' => $this->input->post('red'),
	            'offsides' => $this->input->post('offsides'),
	         
	         	);
	         	$this->load->model('Main_model');
				$data_ = $this->Main_model->get_players_admin();
				$x['players_admin'] = $data_;

	         	if(($data['game_id'] != NULL) && ($data['player_id'] != NULL) && ($data['team_id'] != NULL)  ){  		
	         		$this->Main_model->put_game_details($data);
	         		$this->load->view('player_form',$x);
	         	}
	         	else{
	         		$this->load->view('player_form',$x);
	         	}

			}
			else{
				$this->index();
			}
		}



		public function match_form_123558484(){
			$this->load->helper('form');
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->view('match_form');
			}
			else{
				$this->index();
			}

		}

		public function match_form_database(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->helper('form');
				$data = array( 
	            'match_id' => $this->input->post('match_id'), 
	            'win' => $this->input->post('win'),  
	            'referee_1' => $this->input->post('referee_1'),
	            'referee_2' => $this->input->post('referee_2'),  
	            'referee_3' => $this->input->post('referee_3'),
	            'mom' => $this->input->post('mom'),
	            'form_1' => $this->input->post('form_1'),	
	            'form_2' => $this->input->post('form_2'),
	            'poss_1' => $this->input->post('poss_1'),
	            'poss_2' => $this->input->post('poss_2'),
	            'passes_1' => $this->input->post('passes_1'),
	            'passes_2' => $this->input->post('passes_2'),
	            'corners_1' => $this->input->post('corners_1'),
	            'corners_2' => $this->input->post('corners_2'),

	            
	         	);
				$this->load->model('Main_model');
         		$this->Main_model->put_match_details($data);
         		$this->load->view('admin');
			}
			else{
				$this->index();
			}
		}

		public function timeline_form_123558484(){
			$this->load->helper('form');
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->view('timeline_form');
			}
			else{
				$this->index();
			}

		}

		public function timeline_form_database(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->helper('form');
				$data = array( 
	            'game_id' => $this->input->post('game_id'), 
	            'minute' => $this->input->post('minute'),  
	            'team_id' => $this->input->post('team_id'),
	            'goal' => $this->input->post('goal'),  
	            'yellow' => $this->input->post('yellow'),
	            'red' => $this->input->post('red'),
	            'sub_in' => $this->input->post('sub_in'),	
	            'sub_out' => $this->input->post('sub_out'),
	          

	            
	         	);
				$this->load->model('Main_model');
         		$this->Main_model->put_timeline_details($data);
         		$this->load->view('admin');
			}
			else{
				$this->index();
			}
		}


		public function log_out(){
			session_start(); 
			if(isset($_SESSION['user'])){
				session_unset();
			}
			$this->admin_cse2k17();
		}


		



		public function test(){
			$this->load->view('player_detail');
		}


	}

?>